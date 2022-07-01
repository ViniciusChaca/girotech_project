# Projeto Giro Tech - Vinicius Ferreira
Projeto Simulador de Investimentos.

### Requisitos para Execução
1. Docker
2. Visual Studio Code
3. Extensão do Visual Studio Code: Remote-Containers - ID Extensão: ms-vscode-remote.remote-containers

#### Execução do container
Uma vez instalado todos os requisitos, basta abrir o diretório principal do projeto usando o Visual Studio Code, apertar a tecla "F1" e escolher a opção "Remote-Containers:Reopen in Container".

Após a completa execução do container o servidor web estará pronto para ser acessado em: http://localhost/

#### Informações
Os arquivos "Devcontainer.json" e "Dockerfile" contém os comandos para o Docker montar o container do servidor web. O arquivo "config-apache.sh" contém todas os comandos para a configuração do Apache.

### Portas

Serviço   | Porta
--------- | -------
Apache    | 80
Docker    | 8080
