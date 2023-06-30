<?php

use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Web', 'as' => 'web.'], function () {
    
    /** Página Inicial */
    Route::get('/', [WebController::class, 'home'])->name('home');   
    
    //****************************** Política de Privacidade ******************************/
    Route::get('/politica-de-privacidade', [WebController::class, 'politica'])->name('politica');
    Route::get('/consultoria/produtos', [WebController::class, 'orcamento'])->name('orcamento');
    Route::get('/consultoria/orcamento', [WebController::class, 'formorcamento'])->name('formorcamento');
    Route::get('/quem-somos', [WebController::class, 'quemsomos'])->name('quemsomos');
    Route::get('consultoria/orcamentos/form-client/{token}', [WebController::class, 'formClient'])->name('formClient');

    //** Página Destaque */
    Route::get('/destaque', 'WebController@spotlight')->name('spotlight');
    
    //** Página Inicial */
    Route::match(['post', 'get'], '/filtro', 'WebController@filter')->name('filter');

    //****************************** Parceiros *********************************************/
    Route::get('/parceiro/{slug}', [WebController::class, 'parceiro'])->name('parceiro');

    //***************************** Cliente ********************************************/
    Route::get('/cliente/login', [ClienteController::class, 'login'])->name('login');
    Route::get('/cliente/minha-fatura/{uuid}', [ClienteController::class, 'fatura'])->name('fatura');
   
    //**************************** Emails ********************************************/
    Route::get('/atendimento', [WebController::class, 'atendimento'])->name('atendimento');
    Route::get('/sendEmail', [SendEmailController::class, 'sendEmail'])->name('sendEmail');
    Route::get('/sendNewsletter', [SendEmailController::class, 'sendNewsletter'])->name('sendNewsletter');
    Route::get('/sendOrcamento', [SendEmailController::class, 'sendOrcamento'])->name('sendOrcamento');
    Route::get('/sendFormCaptacao', [SendEmailController::class, 'sendFormCaptacao'])->name('sendFormCaptacao');    
    
    //****************************** Blog ***********************************************/
    Route::get('/blog/artigo/{slug}', [WebController::class, 'artigo'])->name('blog.artigo');
    Route::get('/blog/categoria/{slug}', [WebController::class, 'categoria'])->name('blog.categoria');
    Route::get('/blog', [WebController::class, 'artigos'])->name('blog.artigos');
    Route::match(['get', 'post'],'/blog/pesquisar', [WebController::class, 'searchBlog'])->name('blog.searchBlog');

    //****************************** Portifólio *******************************************/
    Route::get('/portifolio/{slug}', [WebController::class, 'projeto'])->name('projeto');
    Route::get('/portifolio', [WebController::class, 'portifolio'])->name('portifolio');

    //*************************************** Páginas *******************************************/
    Route::get('/pagina/{slug}', [WebController::class, 'pagina'])->name('pagina');

    //** Pesquisa */
    Route::match(['post', 'get'], '/pesquisa', [WebController::class, 'pesquisa'])->name('pesquisa');

    //** FEED */    
    Route::get('feed', [RssFeedController::class, 'feed'])->name('feed');
    

});
