<?php

use App\Http\Controllers\backend\AffiliationController;
use App\Http\Controllers\backend\BackendHome;
use App\Http\Controllers\backend\BlogcatController;
use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\ClientController;
use App\Http\Controllers\backend\CareerController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\EnlistmentController;
use App\Http\Controllers\backend\EventController;
use App\Http\Controllers\backend\GalleryController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\backend\TeamController;
use App\Http\Controllers\backend\homepage\WhoweareController;
use App\Http\Controllers\backend\MembershipController;
use App\Http\Controllers\backend\NewsletterController;
use App\Http\Controllers\backend\PagesetupController;
use App\Http\Controllers\backend\PublicationController;
use App\Http\Controllers\backend\RegistrationsController;
use App\Http\Controllers\backend\RegulatorController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\ThemeOptionsController;
use App\Http\Controllers\FrontendController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();


/*********************** Frontend  *************************************/

Route::get('/', [HomeController::class, 'index'])->name('frontend.index');

// about us
Route::get('/company-profile', [FrontendController::class, 'companyprofile']);
Route::get('/meet-our-team', [FrontendController::class, 'meetourteam']);
Route::get('/affiliation', [FrontendController::class, 'affiliation']);
Route::get('/enlistment', [FrontendController::class, 'enlistment']);
Route::get('/membership', [FrontendController::class, 'membership']);
// service
Route::get('/audit-assurance', [FrontendController::class, 'auditassurance']);
Route::get('/taxation-vat', [FrontendController::class, 'taxationvat']);
Route::get('/advisory', [FrontendController::class, 'advisory']);
Route::get('/secretarial-licensing-compliance', [FrontendController::class, 'secretariallicensingcompliance']);
Route::get('/business-service', [FrontendController::class, 'businessservice']);
Route::get('/human-resource-services', [FrontendController::class, 'humanresource']);
Route::get('/training-development', [FrontendController::class, 'trainingdevelopment']);
// client page start
Route::get('/financial-institutions', [FrontendController::class, 'financialinstitutions']);
Route::get('/listed-companies', [FrontendController::class, 'govtSemiGovtlistedcompanies']);
Route::get('/foreign-client', [FrontendController::class, 'Foreignclient']);
Route::get('/international-clients', [FrontendController::class, 'internationalclients']);

// media page start
Route::get('/newsletter', [FrontendController::class, 'newsletter']);
Route::get('/newsletter/details/{id}', [FrontendController::class, 'newsletterDetails'])->name('newsletter.details');
Route::get('/blogs', [FrontendController::class, 'blog']);
Route::get('/blogs/details/{id}', [FrontendController::class, 'blogDetails'])->name('blog.details');
Route::get('/publication', [FrontendController::class, 'publication'])->name('publication');
Route::get('/gallery', [FrontendController::class, 'gallery']);
Route::get('/events', [FrontendController::class, 'events']);
Route::get('/professional', [FrontendController::class, 'professional']);
Route::get('/articleship', [FrontendController::class, 'articleship']);
Route::get('/regulators', [FrontendController::class, 'regulators']);
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');


//subscriber route

Route::post('/subscriber', [SubscriberController::class, 'index'])->name('subscribe');
Route::get('/subscriber/verify/{token}/{email}', [SubscriberController::class, 'verify'])->name('subscriber_verify');

// Message to All Subscriber

Route::get('/subscriber/all', [SubscriberController::class, 'show_all'])->name('admin_subscribers');
Route::get('/subscriber/send-email', [SubscriberController::class, 'send_email'])->name('subscriber_send_email');
Route::post('/admin/subscriber/send-email-submit', [SubscriberController::class, 'send_email_submit'])->name('subscriber_send_email_submit');


//search route
Route::get('/search', [SearchController::class, 'search'])->name('search');


/*********************** backend  route *********************************************************/

Route::get('/home', [BackendHome::class, 'index'])->name('backend.index');
Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});
Route::get('/themeoptions', [ThemeOptionsController::class, 'index'])->name('themeoptions.index');
Route::post('/themeoptions/update', [ThemeOptionsController::class, 'update'])->name('themeoptions.update');

//Sider design route
Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
Route::get('/slider/create', [SliderController::class, 'create'])->name('slider.create');
Route::post('/slider/store', [SliderController::class, 'store'])->name('slider.store');
Route::get('/slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
Route::post('/slider/update/{id}', [SliderController::class, 'update'])->name('slider.update');
Route::get('/slider/delete/{id}', [SliderController::class, 'destroy'])->name('slider.delete');


//Home Page design route
Route::get('/whoweare', [WhoweareController::class, 'index'])->name('homepage.whoweare');
Route::post('/whoweare/update', [WhoweareController::class, 'update'])->name('whoweare.update');


//category routes
Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

//subcategory routes
Route::get('/subcategory/index', [SubcategoryController::class, 'index'])->name('subcategory.index');
Route::get('/subcategory/create', [SubcategoryController::class, 'create'])->name('subcategory.create');
Route::post('/subcategory/store', [SubcategoryController::class, 'store'])->name('subcategory.store');
Route::get('/subcategory/edit/{id}', [SubcategoryController::class, 'edit'])->name('subcategory.edit');
Route::put('/subcategory/update/{id}', [SubcategoryController::class, 'update'])->name('subcategory.update');
Route::delete('/subcategory/delete/{id}', [SubcategoryController::class, 'destroy'])->name('subcategory.destroy');

//Page setup routes
Route::get('/pagesetup/index', [PagesetupController::class, 'index'])->name('pagesetup.index');
Route::get('/pagesetup/create', [PagesetupController::class, 'create'])->name('pagesetup.create');
Route::post('/pagesetup/store', [PagesetupController::class, 'store'])->name('pagesetup.store');
Route::get('/pagesetup/edit/{id}', [PagesetupController::class, 'edit'])->name('pagesetup.edit');
Route::put('/pagesetup/update/{id}', [PagesetupController::class, 'update'])->name('pagesetup.update');
Route::delete('/pagesetup/delete/{id}', [PagesetupController::class, 'destroy'])->name('pagesetup.destroy');


//blog category routes
Route::get('/blogcat/index', [BlogcatController::class, 'index'])->name('blogcat.index');
Route::get('/blogcat/create', [BlogcatController::class, 'create'])->name('blogcat.create');
Route::post('/blogcat/store', [BlogcatController::class, 'store'])->name('blogcat.store');
Route::get('/blogcat/edit/{id}', [BlogcatController::class, 'edit'])->name('blogcat.edit');
Route::put('/blogcat/update/{id}', [BlogcatController::class, 'update'])->name('blogcat.update');
Route::delete('/blogcat/delete/{id}', [BlogcatController::class, 'destroy'])->name('blogcat.destroy');

//blog routes
Route::get('/blog/index', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

//Service content  routes
Route::get('/servicecon/index', [ServiceController::class, 'index'])->name('servicecon.index');
Route::get('/servicecon/create', [ServiceController::class, 'create'])->name('servicecon.create');
Route::post('/servicecon/store', [ServiceController::class, 'store'])->name('servicecon.store');
Route::get('/servicecon/edit/{id}', [ServiceController::class, 'edit'])->name('servicecon.edit');
Route::put('/servicecon/update/{id}', [ServiceController::class, 'update'])->name('servicecon.update');
Route::delete('/servicecon/delete/{id}', [ServiceController::class, 'destroy'])->name('servicecon.destroy');

//client routes
Route::get('/client/index', [ClientController::class, 'index'])->name('client.index');
Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');
Route::get('/client/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
Route::put('/client/update/{id}', [ClientController::class, 'update'])->name('client.update');
Route::delete('/client/delete/{id}', [ClientController::class, 'destroy'])->name('client.destroy');

//company profile
Route::get('/profile', [ProfileController::class, 'index'])->name('about.profile');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

//contact us
Route::get('/contactus/index', [ContactController::class, 'index'])->name('contactus.index');
Route::get('/contactus/create', [ContactController::class, 'create'])->name('contactus.create');
Route::post('/contactus/store', [ContactController::class, 'store'])->name('contactus.store');
Route::get('/contactus/edit/{id}', [ContactController::class, 'edit'])->name('contactus.edit');
Route::put('/contactus/update/{id}', [ContactController::class, 'update'])->name('contactus.update');
Route::delete('/contactus/delete/{id}', [ContactController::class, 'destroy'])->name('contactus.destroy');

//affiliation routes
Route::get('/affiliation/index', [AffiliationController::class, 'index'])->name('affiliation.index');
Route::get('/affiliation/create', [AffiliationController::class, 'create'])->name('affiliation.create');
Route::post('/affiliation/store', [AffiliationController::class, 'store'])->name('affiliation.store');
Route::get('/affiliation/edit/{id}', [AffiliationController::class, 'edit'])->name('affiliation.edit');
Route::put('/affiliation/update/{id}', [AffiliationController::class, 'update'])->name('affiliation.update');
Route::delete('/affiliation/delete/{id}', [AffiliationController::class, 'destroy'])->name('affiliation.destroy');

//team routes
Route::get('/team/index', [TeamController::class, 'index'])->name('team.index');
Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
Route::post('/team/store', [TeamController::class, 'store'])->name('team.store');
Route::get('/team/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
Route::put('/team/update/{id}', [TeamController::class, 'update'])->name('team.update');
Route::delete('/team/delete/{id}', [TeamController::class, 'destroy'])->name('team.destroy');

//enlistment routes
Route::get('/enlistment/index', [EnlistmentController::class, 'index'])->name('enlistment.index');
Route::get('/enlistment/create', [EnlistmentController::class, 'create'])->name('enlistment.create');
Route::post('/enlistment/store', [EnlistmentController::class, 'store'])->name('enlistment.store');
Route::get('/enlistment/edit/{id}', [EnlistmentController::class, 'edit'])->name('enlistment.edit');
Route::put('/enlistment/update/{id}', [EnlistmentController::class, 'update'])->name('enlistment.update');
Route::delete('/enlistment/delete/{id}', [EnlistmentController::class, 'destroy'])->name('enlistment.destroy');

//membership routes
Route::get('/membership/index', [MembershipController::class, 'index'])->name('membership.index');
Route::get('/membership/create', [MembershipController::class, 'create'])->name('membership.create');
Route::post('/membership/store', [MembershipController::class, 'store'])->name('membership.store');
Route::get('/membership/edit/{id}', [MembershipController::class, 'edit'])->name('membership.edit');
Route::put('/membership/update/{id}', [MembershipController::class, 'update'])->name('membership.update');
Route::delete('/membership/delete/{id}', [MembershipController::class, 'destroy'])->name('membership.destroy');

//membership routes
Route::get('/newsletter/index', [NewsletterController::class, 'index'])->name('newsletter.index');
Route::get('/newsletter/create', [NewsletterController::class, 'create'])->name('newsletter.create');
Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletter.store');
Route::get('/newsletter/edit/{id}', [NewsletterController::class, 'edit'])->name('newsletter.edit');
Route::put('/newsletter/update/{id}', [NewsletterController::class, 'update'])->name('newsletter.update');
Route::delete('/newsletter/delete/{id}', [NewsletterController::class, 'destroy'])->name('newsletter.destroy');

//publication routes
Route::get('/publication/index', [PublicationController::class, 'index'])->name('publication.index');
Route::get('/publication/create', [PublicationController::class, 'create'])->name('publication.create');
Route::post('/publication/store', [PublicationController::class, 'store'])->name('publication.store');
Route::get('/publication/edit/{id}', [PublicationController::class, 'edit'])->name('publication.edit');
Route::put('/publication/update/{id}', [PublicationController::class, 'update'])->name('publication.update');
Route::delete('/publication/delete/{id}', [PublicationController::class, 'destroy'])->name('publication.destroy');

//event routes
Route::get('/event/index', [EventController::class, 'index'])->name('event.index');
Route::get('/event/create', [EventController::class, 'create'])->name('event.create');
Route::post('/event/store', [EventController::class, 'store'])->name('event.store');
Route::get('/event/edit/{id}', [EventController::class, 'edit'])->name('event.edit');
Route::put('/event/update/{id}', [EventController::class, 'update'])->name('event.update');
Route::delete('/event/delete/{id}', [EventController::class, 'destroy'])->name('event.destroy');

//career routes
Route::get('/career/professional', [CareerController::class, 'professionalindex'])->name('career.professional');
Route::get('/career/articleship', [CareerController::class, 'articleshipindex'])->name('career.articleship');
Route::get('/career/create', [CareerController::class, 'create'])->name('career.create');
Route::post('/career/store', [CareerController::class, 'store'])->name('career.store');
Route::get('/career/edit/{id}', [CareerController::class, 'edit'])->name('career.edit');
Route::put('/career/update/{id}', [CareerController::class, 'update'])->name('career.update');
Route::delete('/career/delete/{id}', [CareerController::class, 'destroy'])->name('career.destroy');

//regulators routes
Route::get('/regulators/index', [RegulatorController::class, 'index'])->name('regulators.index');
Route::get('/regulators/create', [RegulatorController::class, 'create'])->name('regulators.create');
Route::post('/regulators/store', [RegulatorController::class, 'store'])->name('regulators.store');
Route::get('/regulators/edit/{id}', [RegulatorController::class, 'edit'])->name('regulators.edit');
Route::put('/regulators/update/{id}', [RegulatorController::class, 'update'])->name('regulators.update');
Route::delete('/regulators/delete/{id}', [RegulatorController::class, 'destroy'])->name('regulators.destroy');

//Gallery routes
Route::get('/gallery/index', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
Route::get('/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
Route::put('/gallery/update/{id}', [GalleryController::class, 'update'])->name('gallery.update');
Route::delete('/gallery/delete/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');



//  RegistrationsController routes
Route::get('/event/registration/index', [RegistrationsController::class, 'eventindex'])->name('event.reg.index');
Route::get('/event/registration/create/{id}', [RegistrationsController::class, 'eventcreate'])->name('event.reg.create');

Route::get('/pro/registration/index', [RegistrationsController::class, 'professionalindex'])->name('pro.reg.index');
Route::get('/pro/registration/create/{id}', [RegistrationsController::class, 'professionalcreate'])->name('pro.reg.create');

Route::get('/articleship/registration/index', [RegistrationsController::class, 'articleshipindex'])->name('articleship.reg.index');
Route::get('/articleship/registration/create/{id}', [RegistrationsController::class, 'articleshipcreate'])->name('articleship.reg.create');

Route::get('/contact/index', [RegistrationsController::class, 'contactindex'])->name('contact.index');

Route::get('/publication/registration/index', [RegistrationsController::class, 'publicationPdfindex'])->name('publication.reg.index');
Route::get('/publication/registration/create/{id}', [RegistrationsController::class, 'publicationPdfcreate'])->name('publication.reg.create');


Route::post('/registration/store', [RegistrationsController::class, 'store'])->name('registration.store');

// Route::get('/registration/create', [RegistrationsController::class, 'create'])->name('registration.create');
// Route::get('/registration/edit/{id}', [RegistrationsController::class, 'edit'])->name('registration.edit');
// Route::put('/registration/update/{id}', [RegistrationsController::class, 'update'])->name('registration.update');
// Route::delete('/registration/delete/{id}', [RegistrationsController::class, 'destroy'])->name('registration.destroy');

