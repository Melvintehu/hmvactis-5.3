<?php


// cms routes
Route::auth();

Route::get('/cropper', 'ImageHelperController@index');

Route::resource('photo', 'PhotosController');
Route::post('photo/multi', 'MultiPhotosController@store');

Route::group(['prefix' => 'cms'],  function () {
    Route::group(['middleware' => ['auth']], function(){
        Route::resource('mainPartner', 'MainPartnerController');


        // crm related routes
        Route::resource('admin', 'AdminController');
        Route::resource('members', 'MembersController');
        Route::resource('non-members', 'NonMembersController');
        Route::resource('registrations', 'RegistrationsController');
        Route::resource('galleries', 'GalleriesController');



        Route::resource('news', 'NewsController');
        Route::resource('sponsorDiscounts', 'SponsorDiscountsController');
        Route::resource('boards', 'BoardsController');
        Route::resource('boardMembers', 'BoardMembersController');
        Route::resource('information', 'InformationController');
        Route::resource('pages', 'PagesController');
        Route::resource('pageSections', 'PageSectionsController');
        Route::resource('events', 'EventsController');
        Route::resource('sponsors', 'SponsorsController');
        Route::resource('committees', 'CommitteesController');
        Route::resource('committeeMembers', 'CommitteeMembersController');
        Route::resource('vacancies', 'VacanciesController');
        Route::resource('profile', 'ProfilesController');
        Route::resource('user', 'UserController');

        Route::post('boardMembers/{id}/photo', 'BoardMemberPhotosController@store');
        // get routes
        Route::get('/event/{id}/deelnemers', 'EventsController@displayDeelnemers');
        Route::get('/user/{id}/process-user', 'ProfilesController@processUser');
        Route::get('/pdf-generate/{slug}', 'PDFController@generate')->where(['slug' => '.*']);

        Route::get('/', function(){
            return view('cms.cms');
        });

    });
});


    Route::group(['middleware' => ['auth']], function(){

        Route::get('/logout', function()
        {
            Auth::logout();
            return redirect('/');
        });
    });



    // Post routes
    Route::post('/inschrijven/{id}', 'EventsController@signUpUser');
    Route::post('/profiel/{id}', 'EventsController@uitschrijven');
    Route::post('/mail/contact-mail', 'MailController@contactMail');

    // get Routes
    Route::get('/profiel', 'ProfilesController@show');
    Route::get('/registreren', 'RegisterController@create');
    Route::get('/mail/lid-worden', 'MailController@lidWorden');
    Route::get('/home', 'HomeController@index');

   // pagina routes
    Route::get('/', 'PagesController@homepage');
    Route::get('/commissies', 'CommitteesController@overzicht');
    Route::get('/commissies/{id}', 'PagesController@showCommissie');
    Route::get('/activiteiten', 'EventsController@overzicht');
    Route::get('/kortingen', 'SponsorDiscountsController@overzicht');
    Route::get('/kortingen/{id}', 'PagesController@showKorting');
    Route::get('/lustrum', 'EventsController@lustrumOverzicht');
    Route::get('/over-ons', 'PagesController@overOns');
    Route::get('/partners', 'SponsorsController@overzicht');
    Route::get('/partners/{id}', 'PagesController@showSponsor');
    Route::get('/vacatures', 'VacanciesController@overzicht');
    Route::get('/vacatures/{id}', 'PagesController@showVacature');
    Route::get('/nieuws', 'FrontEndNewsController@index');
    Route::get('/nieuws/{id}', 'NewsController@show');
    Route::get('/contact', 'PagesController@contact');
    Route::get('/activiteit/{id}', 'PagesController@showActiviteit');

    // tijdelijke routes
    Route::get('/commissie_voorbeeld', function () {
        return view('pages.commissie_voorbeeld');
    });

    Route::get('/activiteiten/{id}', 'PagesController@showActiviteit' );

    Route::get('/nieuws_voorbeeld', function () {
        return view('pages.nieuws_voorbeeld');
    });
