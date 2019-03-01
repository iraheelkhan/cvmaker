<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("test", function(){
	return view('testmaster');
});

Auth::routes();
Route::get('logout', function(){
	Auth::logout();
	return redirect('login');
});

/*===============================================
Dashboard Details Routes Goes Here
=================================================*/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('Dashboard');




/*===============================================
after registration first step routes goes here
=================================================*/

Route::get('register/step2', 'PersonalController@first')->name('FirstPersonalShow');
Route::post('register/personal/create', 'PersonalController@create')->name('FirstPersonalStore');

Route::get('register/step3', 'EducationController@first')->name('FirstEducationShow');
Route::post('register/education/create', 'EducationController@create')->name('FirstEducationStore');

Route::get('register/step4', 'ExperienceController@first')->name('FirstExperienceShow');
Route::post('register/experience/create', 'ExperienceController@create')->name('FirstExperienceStore');

Route::get('register/step5', 'LanguageController@first')->name('FirstLanguageShow');
Route::post('register/language/create', 'LanguageController@create')->name('FirstLanguageStore');

Route::get('register/step6', 'SkillController@first')->name('FirstSkillShow');
Route::post('register/skill/create', 'SkillController@create')->name('FirstSkillStore');

Route::get('register/step7', 'ProjectController@first')->name('FirstProjectShow');
Route::post('register/project/create', 'ProjectController@create')->name('FirstProjectStore');

Route::get('register/step8', 'CertificationController@first')->name('FirstCertificationShow');
Route::post('register/certification/create', 'CertificationController@create')->name('FirstCertificationStore');

/*===============================================
Personal Details Routes Goes Here
=================================================*/
Route::get('personal', 'PersonalController@list')->name("PersonalList");
Route::get('personal/edit', 'PersonalController@edit')->name("PersonalEdit");
Route::post('personal/edit/save', 'PersonalController@update')->name("PersonalUpdate");
/*===============================================
Educational Details Routes Goes Here
=================================================*/
Route::get('education', 'EducationController@list')->name("EducationList");
Route::get('education/add', 'EducationController@add')->name("EducationAdd");
Route::post('education/add/create', 'EducationController@addmore')->name("EducationAddMore");
Route::post('education/delete', 'EducationController@delete')->name("EducationDelete");
Route::post('education/edit', 'EducationController@edit')->name("EducationEdit");
Route::post('education/update', 'EducationController@update')->name("EducationUpdate");

/*===============================================
Expereince Details Routes Goes Here
=================================================*/
Route::get('experience', 'ExperienceController@list')->name("ExperienceList");
Route::get('experience/add', 'ExperienceController@add')->name("ExperienceAdd");
Route::post('experience/add/create', 'ExperienceController@addmore')->name("ExperienceAddMore");
Route::post('experience/delete', 'ExperienceController@delete')->name("ExperienceDelete");
Route::post('experience/edit', 'ExperienceController@edit')->name("ExperienceEdit");
Route::post('experience/update', 'ExperienceController@update')->name("ExperienceUpdate");

/*===============================================
Certifications Details Routes Goes Here
=================================================*/
Route::get('certification', 'CertificationController@list')->name("CertificationList");
Route::get('certification/add', 'CertificationController@add')->name("CertificationAdd");
Route::post('certification/add/create', 'CertificationController@addmore')->name("CertificationAddMore");
Route::post('certification/delete', 'CertificationController@delete')->name("CertificationDelete");
Route::post('certification/edit', 'CertificationController@edit')->name("CertificationEdit");
Route::post('certification/update', 'CertificationController@update')->name("CertificationUpdate");
/*===============================================
Skills Details Routes Goes Here
=================================================*/
Route::get('skill', 'SkillController@list')->name("SkillList");
Route::get('skill/add', 'SkillController@add')->name("SkillAdd");
Route::post('skill/add/create', 'SkillController@addmore')->name("SkillAddMore");
Route::post('skill/delete', 'SkillController@delete')->name("SkillDelete");
Route::post('skill/edit', 'SkillController@edit')->name("SkillEdit");

/*===============================================
Languages Details Routes Goes Here
=================================================*/
Route::get('language', 'LanguageController@list')->name("LanguageList");
Route::get('language/add', 'LanguageController@add')->name("LanguageAdd");
Route::post('language/add/create', 'LanguageController@addmore')->name("LanguageAddMore");
Route::post('language/delete', 'LanguageController@delete')->name("LanguageDelete");
Route::post('language/edit', 'LanguageController@edit')->name("LanguageEdit");

/*===============================================
Projects Details Routes Goes Here
=================================================*/
Route::get('project', 'ProjectController@list')->name("ProjectList");
Route::get('project/add', 'ProjectController@add')->name("ProjectAdd");
Route::post('project/add/create', 'ProjectController@addmore')->name("ProjectAddMore");
Route::post('project/delete', 'ProjectController@delete')->name("ProjectDelete");
Route::post('project/edit', 'ProjectController@edit')->name("ProjectEdit");
Route::post('project/update', 'ProjectController@update')->name("ProjectUpdate");


/*===============================================
Template Details Routes Goes Here
=================================================*/
Route::get('templates', 'TemplateController@list')->name("TemplateList");


/*===============================================
Templates Details Routes Goes Here
=================================================*/


/*===============================================
PDF Routes Goes Here
=================================================*/
Route::get('/pdf','PdfController@export_pdf')->name('GeneratePDF');

/*===============================================
Admin Routes Goes Here
=================================================*/	
Route::get('admin/user/list','AdminController@list')->name('UserList');
Route::post('admin/user/delete','AdminController@delete')->name('UserDelete');
