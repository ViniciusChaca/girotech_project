<?php

function jurosCompostos($capital_inicial, $meses, $taxa_de_juros)
{
    if (isset($_POST['capital_inicial']) && isset($_POST['meses']) && isset($_POST['taxa_de_juros'])) {
        $valor_acumulado = $capital_inicial;
        $juros_compostos_total = 0;

        for ($i = 0; $i < $meses; $i++) {
            $juros_compostos = ($valor_acumulado * $taxa_de_juros) / 100;
            $valor_acumulado += $juros_compostos;
            $juros_compostos_total += $juros_compostos;
        }

        $capital_inicial = number_format($capital_inicial, 2, ",", ".");
        $valor_acumulado = number_format($valor_acumulado, 2, ",", ".");
        $juros_compostos_total = number_format($juros_compostos_total, 2, ",", ".");
        $meses = number_format($meses);

        $table = '<table id="resultForm">';
        $table .= '<thead>';
        $table .= '<tr>';
        $table .= '<td>Capital Inicial</td>';
        $table .= '<td>Meses</td>';
        $table .= '<td>Rendimento</td>';
        $table .= '<td>Capital Final</td>';
        $table .= '</tr>';
        $table .= '</thead>';
        $table .= '<tbody>';
        $table .= '<tr>';
        $table .= "<td>R$ {$capital_inicial}</td>";
        $table .= "<td>{$meses}</td>";
        $table .= "<td>R$ {$juros_compostos_total}</td>";
        $table .= "<td>R$ {$valor_acumulado}</td>";
        $table .= '</tr>';
        $table .= '</tbody>';
        $table .= '</table>';

        echo $table;
    }
}
