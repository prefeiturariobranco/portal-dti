<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Site\InicioController@index');
Route::get('/perguntas', 'Site\PerguntasController@perguntas');
Route::get('/submenu/{id}', 'Site\SubmenuController@submenu');
Route::get('/ti-local', 'Site\TiLocalController@index');
Route::get('/login', 'Login\LoginController@index');
Route::get('/contatos', 'Site\ContatosController@index');
Route::get('/novidades', 'Site\NovidadesController@novidades');
Route::get('/novidade/{id}', 'Site\NovidadeController@show');
Route::get('/tutoriais', 'Site\TutoriaisController@tutoriais');
Route::get('/tutorial/{id}', 'Site\TutorialController@show');
Route::get('/especificacoes-ti', 'Site\EspecificacaoController@index');
Route::get('/aplicativos', 'Site\AplicativosController@index')->name('apps');
Route::get('/aplicativo/{id}', 'Site\AplicativoController@show')->name('site.app');

Route::get('/error/500', 'Utils\ErrorController@error500');

Route::fallback(function () {
    return view('error.404');
});

/*
 * ROUTAS QUE PERTENCIAM AO AUTH
 */
#LOGIN/Painel
Route::post('/login/verificar', 'Login\CheckLoginController@index');
Route::get('/painel', 'Dashboard\DashboardController@index')->middleware('logado');
Route::get('/painel/sair', 'Login\LogoutController@index')->middleware('logado');

#USUARIOS
Route::get('/painel/usuarios/listar', 'Dashboard\Usuarios\ListaUsuariosController@index')->middleware('logado');
Route::get('/painel/usuarios/{id}/permissoes', 'Dashboard\Usuarios\PermissoesController@show')->middleware('logado');

Route::post('/painel/usuarios/info', 'Dashboard\Usuarios\ListaUsuariosController@info')->middleware('logado');
#Não conseguir mexer está faltando arquivos
Route::get('/painel/usuarios/cadastrar', 'Dashboard\Usuarios\CadastrarUsuariosController@index')->middleware('logado');
Route::post('/painel/usuarios/salvar', 'Dashboard\Usuarios\CadastrarUsuariosController@store')->middleware('logado');
Route::get('/painel/usuarios/{id}', 'Dashboard\Usuarios\ListaUsuariosController@show')->middleware('logado');
Route::post('/painel/usuarios/alterar/{id}', 'Dashboard\Usuarios\AlterarUsuariosController@update')->middleware('logado');
Route::get('/painel/usuarios/remover/{od}', 'Dashboard\Usuarios\RemoverUsuariosController@destroy')->middleware('logado');

#PERFIL
Route::get('/painel/perfil', 'Dashboard\PerfilController@index')->middleware('logado');

#Senha
Route::get('/painel/senha', 'Dashboard\SenhaController@index')->middleware('logado');
#ALTERAR SENHA
Route::post('/painel/senha/alterar', 'Dashboard\AlterarSenhaController@alterarSenha')->middleware('logado');
#Relatorios
Route::get('/painel/relatorios', 'Dashboard\RelatoriosController@index')->middleware('logado');
#MAPAS
Route::get('/painel/mapa/{id}', 'Dashboard\Mapas\MapaController@show')->middleware('logado');

#SUBICONES
Route::get('/painel/subicones', 'Dashboard\SubiconesController@index')->middleware('logado');
#TI LOCA
Route::get('/painel/ti-local', 'Dashboard\TiLocalController@index')->middleware('logado');
Route::post('/painel/ti-local/cadastrar', 'Dashboard\TiLocalController@store')->middleware('logado');
#EDIT USAR UM METODOS DO CORE - NECESSARIO CORE
Route::post('/painel/ti-local/editar', 'Dashboard\TiLocalController@edit')->middleware('logado');
#EXCLUIR USAR STATUS - NECESSARIO BANCO
Route::post('/painel/ti-local/deletar', 'Dashboard\TiLocalController@delet')->middleware('logado');

#Contatos
Route::get('/painel/contatos', 'Dashboard\ContatosController@contatos')->middleware('logado');

#Historia
Route::get('/painel/informacoes/historia', 'Dashboard\Informacoes\HistoriaController@index')->middleware('logado');
#Equipe-dti
Route::get('/painel/informacoes/equipe-dti', 'Dashboard\Informacoes\EquipeController@index')->middleware('logado');
#Planejamento
Route::get('/painel/informacoes/planejamento', 'Dashboard\Informacoes\PlanejamentoController@index')->middleware('logado');

# Infraestrutura - Novo Modelo
Route::get('/painel/infra/fibra/listar', 'Dashboard\Infraestrutura\Fibra\ListarController@index')->middleware('logado');
Route::get('/painel/infra/fibra/alterar/{id}', 'Dashboard\Infraestrutura\Fibra\AlterarController@show')->middleware('logado');
Route::get('/painel/infra/fibra/cadastrar', 'Dashboard\Infraestrutura\Fibra\CadastrarController@index')->middleware('logado');
Route::get('/painel/infra/fibra/remover/{id}', 'Dashboard\Infraestrutura\Fibra\RemoverController@remover')->middleware('logado');
Route::get('/painel/infra/config', 'Dashboard\Infraestrutura\ConfigController@index')->middleware('logado');
Route::post('/painel/infra/config/salvar', 'Dashboard\Infraestrutura\ConfigController@store')->middleware('logado');
Route::post('/painel/infra/fibra/salvar', 'Dashboard\Infraestrutura\Fibra\CadastrarController@store')->middleware('logado');
Route::post('/painel/infra/fibra/editar', 'Dashboard\Infraestrutura\Fibra\AlterarController@update')->middleware('logado');

#Icones
Route::get('/painel/icones', 'Dashboard\Icones\ListarIconesController@index')->middleware('logado');
Route::get('/painel/icones/cadastro', 'Dashboard\Icones\CadastrarIconesController@index')->middleware('logado');
Route::get('/painel/icones/editar/{id}', 'Dashboard\Icones\EditarIconesController@show')->middleware('logado');
Route::get('/painel/icones/deletar/{id}', 'Dashboard\Icones\DeletarIconesController@remover')->middleware('logado');
Route::post('/painel/icones/salvar', 'Dashboard\Icones\CadastrarIconesController@store')->middleware('logado');
Route::post('/painel/icones/alterar', 'Dashboard\Icones\EditarIconesController@update')->middleware('logado');

#Novidade
Route::get('/painel/novidades', 'Dashboard\NovidadesController@index')->middleware('logado');

#Aplicativos
Route::get('/painel/aplicativos', 'Dashboard\Aplicativos\ListarAplicativosController@index')->middleware('logado');
Route::get('/painel/aplicativos/cadastro', 'Dashboard\Aplicativos\CadastrarAplicativosController@index')->middleware('logado');
Route::get('/painel/aplicativos/editar/{id}', 'Dashboard\Aplicativos\EditarAplicativosController@show')->middleware('logado');
Route::get('/painel/aplicativos/deletar/{id}', 'Dashboard\Aplicativos\DeletarAplicativosController@destroy')->middleware('logado');
Route::post('/painel/aplicativos/salvar', 'Dashboard\Aplicativos\CadastrarAplicativosController@store')->middleware('logado');
Route::post('/painel/aplicativos/alterar', 'Dashboard\Aplicativos\EditarAplicativosController@update')->middleware('logado')->name('aplicativo.update');

#Categorias Ícones
Route::get('/painel/categorias-icones', 'Dashboard\Categorias\Icones\ListarCategoriasController@index')->middleware('logado');
Route::get('/painel/categorias-icones/cadastro', 'Dashboard\Categorias\Icones\CadastrarCategoriasController@create')->middleware('logado');
Route::get('/painel/categorias-icones/editar/{id}', 'Dashboard\Categorias\Icones\EditarCategoriasController@edit')->middleware('logado');
Route::get('/painel/categorias-icones/deletar/{id}', 'Dashboard\Categorias\Icones\DeletarCategoriasController@destroy')->middleware('logado');
Route::post('/painel/categorias-icones/salvar', 'Dashboard\Categorias\Icones\CadastrarCategoriasController@store')->middleware('logado');
Route::post('/painel/categorias-icones/alterar', 'Dashboard\Categorias\Icones\EditarCategoriasController@update')->middleware('logado');

#Categorias Planejamentos
Route::get('/painel/categorias-planejamentos', 'Dashboard\Categorias\Planejamentos\ListarCategoriasController@index')
    ->middleware('logado')->name('index.plan');
Route::get('/painel/categorias-planejamentos/cadastro', 'Dashboard\Categorias\Planejamentos\CadastrarCategoriasController@create')
    ->middleware('logado')->name('create.plan');
Route::post('/painel/categorias-planejamentos/salvar', 'Dashboard\Categorias\Planejamentos\CadastrarCategoriasController@store')
    ->middleware('logado')->name('store.plan');
Route::get('/painel/categorias-planejamentos/editar/{id}', 'Dashboard\Categorias\Planejamentos\EditarCategoriasController@edit')
    ->middleware('logado')->name('edit.plan');
Route::post('/painel/categorias-planejamentos/alterar', 'Dashboard\Categorias\Planejamentos\EditarCategoriasController@update')
    ->middleware('logado')->name('update.plan');
Route::get('/painel/categorias-planejamentos/deletar/{id}', 'Dashboard\Categorias\Planejamentos\DeletarCategoriasController@destroy')
    ->middleware('logado')->name('destroy.plan');


#Categorias Documentos
Route::get('/painel/categorias-documentos', 'Dashboard\Categorias\Documentos\ListarCategoriasController@index')
    ->middleware('logado')->name('index.doc');
Route::get('/painel/categorias-documentos/cadastro', 'Dashboard\Categorias\Documentos\CadastrarCategoriasController@create')
    ->middleware('logado')->name('create.doc');
Route::post('/painel/categorias-documentos/salvar', 'Dashboard\Categorias\Documentos\CadastrarCategoriasController@store')
    ->middleware('logado')->name('store.doc');
Route::get('/painel/categorias-documentos/editar/{id}', 'Dashboard\Categorias\Documentos\EditarCategoriasController@edit')
    ->middleware('logado')->name('edit.doc');
Route::post('/painel/categorias-documentos/alterar', 'Dashboard\Categorias\Documentos\EditarCategoriasController@update')
    ->middleware('logado')->name('update.doc');
Route::get('/painel/categorias-documentos/deletar/{id}', 'Dashboard\Categorias\Documentos\DeletarCategoriasController@destroy')
    ->middleware('logado');


#Categorias Investimentos
Route::get('/painel/categorias-investimentos', 'Dashboard\Categorias\Investimentos\ListarCategoriasController@index')
    ->middleware('logado')->name('index.invest');
Route::get('/painel/categorias-investimentos/cadastro', 'Dashboard\Categorias\Investimentos\CadastrarCategoriasController@create')
    ->middleware('logado')->name('create.invest');
Route::post('/painel/categorias-investimentos/salvar', 'Dashboard\Categorias\Investimentos\CadastrarCategoriasController@store')
    ->middleware('logado')->name('store.invest');
Route::get('/painel/categorias-investimentos/editar/{id}', 'Dashboard\Categorias\Investimentos\EditarCategoriasController@edit')
    ->middleware('logado')->name('edit.invest');
Route::post('/painel/categorias-investimentos/alterar', 'Dashboard\Categorias\Investimentos\EditarCategoriasController@update')
    ->middleware('logado')->name('update.invest');
Route::get('/painel/categorias-investimentos/deletar/{id}', 'Dashboard\Categorias\Investimentos\DeletarCategoriasController@destroy')
    ->middleware('logado')->name('destroy.invest');

#Contatos
Route::get('/painel/contatos', 'Dashboard\Contatos\ListarContatosController@index')->middleware('logado');
Route::get('/painel/contatos/cadastro', 'Dashboard\Contatos\CadastrarContatosController@index')->middleware('logado');
Route::get('/painel/contatos/editar/{id}', 'Dashboard\Contatos\EditarContatosController@show')->middleware('logado');
Route::get('/painel/contatos/deletar/{id}', 'Dashboard\Contatos\DeletarContatosController@destroy')->middleware('logado');
Route::post('/painel/contatos/salvar', 'Dashboard\Contatos\CadastrarContatosController@store')->middleware('logado');
Route::post('/painel/contatos/alterar', 'Dashboard\Contatos\EditarContatosController@update')->middleware('logado');

#Perguntas
Route::get('/painel/perguntas', 'Dashboard\Perguntas\ListarPerguntasController@index')->middleware('logado');
Route::get('/painel/perguntas/cadastro', 'Dashboard\Perguntas\CadastrarPerguntasController@index')->middleware('logado');
Route::get('/painel/perguntas/editar/{id}', 'Dashboard\Perguntas\EditarPerguntasController@show')->middleware('logado');
Route::get('/painel/perguntas/deletar/{id}', 'Dashboard\Perguntas\DeletarPerguntasController@destroy')->middleware('logado');
Route::post('/painel/perguntas/salvar', 'Dashboard\Perguntas\CadastrarPerguntasController@store')->middleware('logado');
Route::post('/painel/perguntas/alterar', 'Dashboard\Perguntas\EditarPerguntasController@update')->middleware('logado');

# Subicones
Route::get('/painel/subicones', 'Dashboard\Subicones\ListarSubiconesController@index')->middleware('logado');
Route::get('/painel/subicones/cadastro', 'Dashboard\Subicones\CadastrarSubiconesController@index')->middleware('logado');
Route::get('/painel/subicones/editar/{id}', 'Dashboard\Subicones\EditarSubiconesController@show')->middleware('logado');
Route::get('/painel/subicones/deletar/{id}', 'Dashboard\Subicones\DeletarSubiconesController@destroy')->middleware('logado');
Route::post('/painel/subicones/salvar', 'Dashboard\Subicones\CadastrarSubiconesController@store')->middleware('logado');
Route::post('/painel/subicones/alterar', 'Dashboard\Subicones\EditarSubiconesController@update')->middleware('logado');

# TiLocal
Route::get('/painel/tilocal', 'Dashboard\TiLocal\ListarTilocalController@index')->middleware('logado');
Route::get('/painel/tilocal/cadastro', 'Dashboard\TiLocal\CadastrarTilocalController@index')->middleware('logado');
Route::get('/painel/tilocal/editar/{id}', 'Dashboard\TiLocal\EditarTilocalController@show')->middleware('logado');
Route::get('/painel/tilocal/deletar/{id}', 'Dashboard\TiLocal\DeletarTilocalController@destroy')->middleware('logado');
Route::post('/painel/tilocal/salvar', 'Dashboard\TiLocal\CadastrarTilocalController@store')->middleware('logado');
Route::post('/painel/tilocal/alterar', 'Dashboard\TiLocal\EditarTilocalController@update')->middleware('logado');

# Noticias
Route::get('/painel/noticias', 'Dashboard\Noticias\ListarNoticiasController@index')->middleware('logado');
Route::get('/painel/noticias/cadastro', 'Dashboard\Noticias\CadastrarNoticiasController@index')->middleware('logado');
Route::get('/painel/noticias/editar/{id}', 'Dashboard\Noticias\EditarNoticiasController@show')->middleware('logado');
Route::get('/painel/noticias/deletar/{id}', 'Dashboard\Noticias\DeletarNoticiasController@destroy')->middleware('logado');
Route::post('/painel/noticias/salvar', 'Dashboard\Noticias\CadastrarNoticiasController@store')->middleware('logado');
Route::post('/painel/noticias/alterar', 'Dashboard\Noticias\EditarNoticiasController@update')->middleware('logado');

# Tutoriais
Route::get('/painel/tutoriais', 'Dashboard\Tutoriais\ListarTutoriaisController@index')->middleware('logado');
Route::get('/painel/tutoriais/cadastro', 'Dashboard\Tutoriais\CadastrarTutoriaisController@index')->middleware('logado');
Route::get('/painel/tutoriais/editar/{id}', 'Dashboard\Tutoriais\EditarTutoriaisController@show')->middleware('logado');
Route::get('/painel/tutoriais/deletar/{id}', 'Dashboard\Tutoriais\DeletarTutoriaisController@destroy')->middleware('logado');
Route::post('/painel/tutoriais/salvar', 'Dashboard\Tutoriais\CadastrarTutoriaisController@store')->middleware('logado');
Route::post('/painel/tutoriais/alterar', 'Dashboard\Tutoriais\EditarTutoriaisController@update')->middleware('logado');


# Investimentos
Route::get('/painel/investimentos', 'Dashboard\Investimentos\ListarInvestimentosController@index')->middleware('logado');
Route::get('/painel/investimentos/cadastro', 'Dashboard\Investimentos\CadastrarInvestimentosController@index')->middleware('logado');
Route::get('/painel/investimentos/editar/{id}', 'Dashboard\Investimentos\EditarInvestimentosController@show')->middleware('logado');
Route::get('/painel/investimentos/deletar/{id}', 'Dashboard\Investimentos\DeletarInvestimentosController@destroy')->middleware('logado');
Route::post('/painel/investimentos/salvar', 'Dashboard\Investimentos\CadastrarInvestimentosController@store')->middleware('logado');
Route::post('/painel/investimentos/alterar', 'Dashboard\Investimentos\EditarInvestimentosController@update')->middleware('logado');

# Planejamento
Route::get('/painel/planejamentos', 'Dashboard\Planejamentos\ListarPlanejamentosController@index')->middleware('logado');
Route::get('/painel/planejamentos/cadastro', 'Dashboard\Planejamentos\CadastrarPlanejamentosController@index')->middleware('logado');
Route::get('/painel/planejamentos/editar/{id}', 'Dashboard\Planejamentos\EditarPlanejamentosController@show')->middleware('logado');
Route::get('/painel/planejamentos/deletar/{id}', 'Dashboard\Planejamentos\DeletarPlanejamentosController@destroy')->middleware('logado');
Route::post('/painel/planejamentos/salvar', 'Dashboard\Planejamentos\CadastrarPlanejamentosController@store')->middleware('logado');
Route::post('/painel/planejamentos/alterar', 'Dashboard\Planejamentos\EditarPlanejamentosController@update')->middleware('logado');

# Acontecimentos
Route::get('/painel/acontecimentos', 'Dashboard\Acontecimentos\ListarAcontecimentosController@index')->middleware('logado');
Route::get('/painel/acontecimentos/cadastro', 'Dashboard\Acontecimentos\CadastrarAcontecimentosController@index')->middleware('logado');
Route::get('/painel/acontecimentos/editar/{id}', 'Dashboard\Acontecimentos\EditarAcontecimentosController@show')->middleware('logado');
Route::get('/painel/acontecimentos/deletar/{id}', 'Dashboard\Acontecimentos\DeletarAcontecimentosController@destroy')->middleware('logado');
Route::post('/painel/acontecimentos/salvar', 'Dashboard\Acontecimentos\CadastrarAcontecimentosController@store')->middleware('logado');
Route::post('/painel/acontecimentos/alterar', 'Dashboard\Acontecimentos\EditarAcontecimentosController@update')->middleware('logado');

# Documentos Lista
Route::get('/painel/documentos', 'Dashboard\Documentos\ListarDocumentosController@index')->middleware('logado');
Route::get('/painel/documentos/abrir/{id}', 'Dashboard\Documentos\ListarDocumentosController@show')->middleware('logado');
Route::get('/painel/documento/{id}', 'Dashboard\Documentos\ListarDocumentosController@download')->middleware('logado');

#Documentos
Route::get('/painel/documentos/cadastro', 'Dashboard\Documentos\CadastrarDocumentosController@index')->middleware('logado');
Route::get('/painel/documentos/editar/{id}', 'Dashboard\Documentos\EditarDocumentosController@show')->middleware('logado');
Route::get('/painel/documentos/deletar/{id}', 'Dashboard\Documentos\DeletarDocumentosController@destroy')->middleware('logado');
Route::post('/painel/documentos/salvar', 'Dashboard\Documentos\CadastrarDocumentosController@store')->middleware('logado');
Route::post('/painel/documentos/alterar', 'Dashboard\Documentos\EditarDocumentosController@update')->middleware('logado');
Route::get('/painel/documentos/arquivo/remover/{documentoid}/{arquivoid}', 'Dashboard\Documentos\RemoverArquivosController@destroy')->middleware('logado');

# Sistemas
Route::get('/painel/sistemas/webpublico', 'Dashboard\Sistemas\WebpublicoController@index')->middleware('logado');
Route::post('/painel/sistemas/webpublico/salvar', 'Dashboard\Sistemas\WebpublicoController@store')->middleware('logado');

# Imagens
Route::get('/img/perfil/{name}', 'Utils\ImageController@getProfileImage')->middleware('logado');
Route::get('/banner/{name}', 'Utils\ImageController@getBannerImage')->middleware('logado');

#Cargos
Route::get('/painel/cargos', 'Dashboard\Cargos\CargoController@index')->name('lista.cargos')->middleware('logado');
Route::get('/painel/cargos/deletar/{id}','Dashboard\Cargos\CargoController@delete')->name('deleta.cargos')->middleware('logado');
Route::get('/painel/cargos/editar/{id}','Dashboard\Cargos\CargoController@edit')->name('edita.cargos')->middleware('logado');
Route::get('/painel/cargos/cadastro', 'Dashboard\Cargos\CargoController@cadcreate')->name('cadastro.cargos')->middleware('logado');
Route::post('/painel/cargos/cadastro/salvar', 'Dashboard\Cargos\CargoController@create')->name('save.cargos')->middleware('logado');
Route::post('/painel/cargos/cadastro/editar', 'Dashboard\Cargos\CargoController@update')->name('editsave.cargos')->middleware('logado');

# API
Route::get('/api/investimentos/{id}', 'Dashboard\Investimentos\ApiInvestimentosController@investimentosRealizados')->middleware('logado');
Route::get('/api/mapa/geral/{id}', 'Dashboard\Mapas\ApiMapasController@infoMapaGeral')->middleware('logado');
Route::get('/api/sistemas/chamados/qtd', 'Dashboard\Sistemas\ApiSistemasController@chamadosModulos')->middleware('logado');
Route::get('/api/sistemas/chamados/horas', 'Dashboard\Sistemas\ApiSistemasController@horasModulos')->middleware('logado');
Route::get('/api/sistemas/chamados/ciclo', 'Dashboard\Sistemas\ApiSistemasController@horasPorCiclo')->middleware('logado');
Route::get('/api/infra/fibra', 'Dashboard\Infraestrutura\Fibra\ApiController@evolucaoMalhaFibra')->middleware('logado');
Route::get('/api/infra/conexao/unidades', 'Dashboard\Infraestrutura\Fibra\ApiController@tipoConexaoUnidades')->middleware('logado');
