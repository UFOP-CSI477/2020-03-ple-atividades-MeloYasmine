CSI477-2020-03 - PLE - Trabalho Final - Resultados
Aluna: Yasmine de Melo Leite - 17.2.8104

1. Funcionalidades implementadas
-Criar, editar e excluir novo usuário 
-Criar um administrador 
-Adicionar e excluir músicas, adicionar gêneros musicais(apenas administradores)
-Visualizar e reproduzir músicas
-Criar playlists e excluir playlists
-Exibir músicas recomendadas por gênero favorito

2. Funcionalidades previstas e não implementadas
-A funcionalidade de 
 músicas não foi adicionada, assim como adicionar artista que deixou se ser 
uma tabela no banco para apenas um atributo da tabela 'musicas'


3. Outras funcionalidades implementadas
-Implementação de um segundo tipo de usuário, o administrador que tem permissão para inserir e excluir músicas
e inserir gêneros musicais.


4. Principais desafios e dificuldades
Pensar em um modelo de banco de dados que seria eficiente para o armazenamento 
das playlists em um banco de dados relacional e a realização da busca no banco de dados para recuperá-las.

5.Instruções para instalação e execução
O projeto se encontra na pasta Projeto -> projeto, deve ser executado no terminal, 
dentro dessa pasta o comando php artisan serve, e depois, em seu navegador de preferência digitar 
localhost:8000, o arquivo do github com banco de dados já contem algumas músicas e perfis de usuário, 
e um administrador cadastrados, o admin poderá ser acessado com o email: admin@hotmail.com e senha “12345678”. 
Somente um administrador pode cadastrar outros administradores.
Um usuário comum também já está adicionado com algumas playlists salvas, email: mariacecilia@hotmail.com e senha
"12345678".


6. Referências
https://laravel.com/docs/8.x
https://devdocs.io/css/


