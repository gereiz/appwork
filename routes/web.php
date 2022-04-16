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

Route::redirect('/', '/dashboards/dashboard-1', 301);
Route::get('charts/c3', 'ChartsController@c3')->name('charts.c3');
Route::get('charts/chartist', 'ChartsController@chartist')->name('charts.chartist');
Route::get('charts/chartjs', 'ChartsController@chartjs')->name('charts.chartjs');
Route::get('charts/flot', 'ChartsController@flot')->name('charts.flot');
Route::get('charts/gmaps', 'ChartsController@gmaps')->name('charts.gmaps');
Route::get('charts/mapael', 'ChartsController@mapael')->name('charts.mapael');
Route::get('charts/morrisjs', 'ChartsController@morrisjs')->name('charts.morrisjs');
Route::get('charts/sparkline', 'ChartsController@sparkline')->name('charts.sparkline');
Route::get('complete-ui/base', 'CompleteUiController@base')->name('complete-ui.base');
Route::get('complete-ui/charts', 'CompleteUiController@charts')->name('complete-ui.charts');
Route::get('complete-ui/plugins', 'CompleteUiController@plugins')->name('complete-ui.plugins');
Route::get('dashboards/dashboard-2', 'DashboardsController@dashboard2')->name('dashboards.dashboard-2');
Route::get('dashboards/dashboard-3', 'DashboardsController@dashboard3')->name('dashboards.dashboard-3');
Route::get('dashboards/dashboard-4', 'DashboardsController@dashboard4')->name('dashboards.dashboard-4');
Route::get('dashboards/dashboard-5', 'DashboardsController@dashboard5')->name('dashboards.dashboard-5');
Route::get('forms/controls', 'FormsController@controls')->name('forms.controls');
Route::get('forms/custom-controls', 'FormsController@customControls')->name('forms.custom-controls');
Route::get('forms/dual-listbox', 'FormsController@dualListbox')->name('forms.dual-listbox');
Route::get('forms/editors', 'FormsController@editors')->name('forms.editors');
Route::get('forms/extras', 'FormsController@extras')->name('forms.extras');
Route::get('forms/file-upload', 'FormsController@fileUpload')->name('forms.file-upload');
Route::get('forms/input-groups', 'FormsController@inputGroups')->name('forms.input-groups');
Route::get('forms/layouts', 'FormsController@layouts')->name('forms.layouts');
Route::get('forms/pickers', 'FormsController@pickers')->name('forms.pickers');
Route::get('forms/selects', 'FormsController@selects')->name('forms.selects');
Route::get('forms/sliders', 'FormsController@sliders')->name('forms.sliders');
Route::get('forms/switchers', 'FormsController@switchers')->name('forms.switchers');
Route::get('forms/typeahead', 'FormsController@typeahead')->name('forms.typeahead');
Route::get('forms/validation', 'FormsController@validation')->name('forms.validation');
Route::get('forms/wizard', 'FormsController@wizard')->name('forms.wizard');
Route::get('icons/font-awesome', 'IconsController@fontAwesome')->name('icons.font-awesome');
Route::get('icons/ionicons', 'IconsController@ionicons')->name('icons.ionicons');
Route::get('icons/linearicons', 'IconsController@linearicons')->name('icons.linearicons');
Route::get('icons/openiconic', 'IconsController@openiconic')->name('icons.openiconic');
Route::get('icons/stroke7', 'IconsController@stroke7')->name('icons.stroke7');
Route::get('dashboards/dashboard-1', 'DashboardsController@dashboard1')->name('dashboards.dashboard-1');
Route::get('layout-examples/blank', 'LayoutExamplesController@blank')->name('layout-examples.blank');
Route::get('layout-examples/helpers', 'LayoutExamplesController@helpers')->name('layout-examples.helpers');
Route::get('layout-examples/horizontal-sidenav', 'LayoutExamplesController@horizontalSidenav')->name('layout-examples.horizontal-sidenav');
Route::get('layout-examples/layout-1-flex', 'LayoutExamplesController@layout1Flex')->name('layout-examples.layout-1-flex');
Route::get('layout-examples/layout-1', 'LayoutExamplesController@layout1')->name('layout-examples.layout-1');
Route::get('layout-examples/layout-2-flex', 'LayoutExamplesController@layout2Flex')->name('layout-examples.layout-2-flex');
Route::get('layout-examples/layout-2', 'LayoutExamplesController@layout2')->name('layout-examples.layout-2');
Route::get('layout-examples/options', 'LayoutExamplesController@options')->name('layout-examples.options');
Route::get('layout-examples/without-navbar-flex', 'LayoutExamplesController@withoutNavbarFlex')->name('layout-examples.without-navbar-flex');
Route::get('layout-examples/without-navbar', 'LayoutExamplesController@withoutNavbar')->name('layout-examples.without-navbar');
Route::get('layout-examples/without-sidenav', 'LayoutExamplesController@withoutSidenav')->name('layout-examples.without-sidenav');
Route::get('misc/blockui', 'MiscController@blockui')->name('misc.blockui');
Route::get('misc/brand-colors', 'MiscController@brandColors')->name('misc.brand-colors');
Route::get('misc/clipboardjs', 'MiscController@clipboardjs')->name('misc.clipboardjs');
Route::get('misc/idle-timer', 'MiscController@idleTimer')->name('misc.idle-timer');
Route::get('misc/ladda', 'MiscController@ladda')->name('misc.ladda');
Route::get('misc/masonry', 'MiscController@masonry')->name('misc.masonry');
Route::get('misc/numeraljs', 'MiscController@numeraljs')->name('misc.numeraljs');
Route::get('misc/perfect-scrollbar', 'MiscController@perfectScrollbar')->name('misc.perfect-scrollbar');
Route::get('misc/spinkit', 'MiscController@spinkit')->name('misc.spinkit');
Route::get('misc/vegasjs', 'MiscController@vegasjs')->name('misc.vegasjs');
Route::get('pages/account-settings', 'PagesController@accountSettings')->name('pages.account-settings');
Route::get('pages/articles/edit', 'Pages\ArticlesController@edit')->name('pages.articles.edit');
Route::get('pages/articles/list', 'Pages\ArticlesController@list')->name('pages.articles.list');
Route::get('pages/authentication/email-confirm', 'Pages\AuthenticationController@emailConfirm')->name('pages.authentication.email-confirm');
Route::get('pages/authentication/lock-screen-v1', 'Pages\AuthenticationController@lockScreenV1')->name('pages.authentication.lock-screen-v1');
Route::get('pages/authentication/lock-screen-v2', 'Pages\AuthenticationController@lockScreenV2')->name('pages.authentication.lock-screen-v2');
Route::get('pages/authentication/login-and-register', 'Pages\AuthenticationController@loginAndRegister')->name('pages.authentication.login-and-register');
Route::get('pages/authentication/login-v1', 'Pages\AuthenticationController@loginV1')->name('pages.authentication.login-v1');
Route::get('pages/authentication/login-v2', 'Pages\AuthenticationController@loginV2')->name('pages.authentication.login-v2');
Route::get('pages/authentication/login-v3', 'Pages\AuthenticationController@loginV3')->name('pages.authentication.login-v3');
Route::get('pages/authentication/password-reset', 'Pages\AuthenticationController@passwordReset')->name('pages.authentication.password-reset');
Route::get('pages/authentication/register-v1', 'Pages\AuthenticationController@registerV1')->name('pages.authentication.register-v1');
Route::get('pages/authentication/register-v2', 'Pages\AuthenticationController@registerV2')->name('pages.authentication.register-v2');
Route::get('pages/authentication/register-v3', 'Pages\AuthenticationController@registerV3')->name('pages.authentication.register-v3');
Route::get('pages/chat', 'PagesController@chat')->name('pages.chat');
Route::get('pages/clients', 'PagesController@clients')->name('pages.clients');
Route::get('pages/contacts', 'PagesController@contacts')->name('pages.contacts');
Route::get('pages/e-commerce/order-detail', 'Pages\ECommerceController@orderDetail')->name('pages.e-commerce.order-detail');
Route::get('pages/e-commerce/order-list', 'Pages\ECommerceController@orderList')->name('pages.e-commerce.order-list');
Route::get('pages/e-commerce/product-edit', 'Pages\ECommerceController@productEdit')->name('pages.e-commerce.product-edit');
Route::get('pages/e-commerce/product-item', 'Pages\ECommerceController@productItem')->name('pages.e-commerce.product-item');
Route::get('pages/e-commerce/product-list', 'Pages\ECommerceController@productList')->name('pages.e-commerce.product-list');
Route::get('pages/education/courses-v1', 'Pages\EducationController@coursesV1')->name('pages.education.courses-v1');
Route::get('pages/education/courses-v2', 'Pages\EducationController@coursesV2')->name('pages.education.courses-v2');
Route::get('pages/faq', 'PagesController@faq')->name('pages.faq');
Route::get('pages/file-manager', 'PagesController@fileManager')->name('pages.file-manager');
Route::get('pages/forums/discussion', 'Pages\ForumsController@discussion')->name('pages.forums.discussion');
Route::get('pages/forums/list', 'Pages\ForumsController@list')->name('pages.forums.list');
Route::get('pages/forums/threads', 'Pages\ForumsController@threads')->name('pages.forums.threads');
Route::get('pages/gallery', 'PagesController@gallery')->name('pages.gallery');
Route::get('pages/help-center', 'PagesController@helpCenter')->name('pages.help-center');
Route::get('pages/invoice-print', 'PagesController@invoicePrint')->name('pages.invoice-print');
Route::get('pages/invoice', 'PagesController@invoice')->name('pages.invoice');
Route::get('pages/kanban-board', 'PagesController@kanbanBoard')->name('pages.kanban-board');
Route::get('pages/messages-v1/compose', 'Pages\MessagesV1Controller@compose')->name('pages.messages-v1.compose');
Route::get('pages/messages-v1/item', 'Pages\MessagesV1Controller@item')->name('pages.messages-v1.item');
Route::get('pages/messages-v1/list', 'Pages\MessagesV1Controller@list')->name('pages.messages-v1.list');
Route::get('pages/messages-v2/compose', 'Pages\MessagesV2Controller@compose')->name('pages.messages-v2.compose');
Route::get('pages/messages-v2/item', 'Pages\MessagesV2Controller@item')->name('pages.messages-v2.item');
Route::get('pages/messages-v2/list', 'Pages\MessagesV2Controller@list')->name('pages.messages-v2.list');
Route::get('pages/messages-v3/compose', 'Pages\MessagesV3Controller@compose')->name('pages.messages-v3.compose');
Route::get('pages/messages-v3/item', 'Pages\MessagesV3Controller@item')->name('pages.messages-v3.item');
Route::get('pages/messages-v3/list', 'Pages\MessagesV3Controller@list')->name('pages.messages-v3.list');
Route::get('pages/pricing', 'PagesController@pricing')->name('pages.pricing');
Route::get('pages/profile-v1', 'PagesController@profileV1')->name('pages.profile-v1');
Route::get('pages/profile-v2', 'PagesController@profileV2')->name('pages.profile-v2');
Route::get('pages/projects/item', 'Pages\ProjectsController@item')->name('pages.projects.item');
Route::get('pages/projects/list', 'Pages\ProjectsController@list')->name('pages.projects.list');
Route::get('pages/search-results', 'PagesController@searchResults')->name('pages.search-results');
Route::get('pages/task-list', 'PagesController@taskList')->name('pages.task-list');
Route::get('pages/teams', 'PagesController@teams')->name('pages.teams');
Route::get('pages/tickets/edit', 'Pages\TicketsController@edit')->name('pages.tickets.edit');
Route::get('pages/tickets/list', 'Pages\TicketsController@list')->name('pages.tickets.list');
Route::get('pages/users/edit', 'Pages\UsersController@edit')->name('pages.users.edit');
Route::get('pages/users/list', 'Pages\UsersController@list')->name('pages.users.list');
Route::get('pages/users/view', 'Pages\UsersController@view')->name('pages.users.view');
Route::get('pages/vacancies', 'PagesController@vacancies')->name('pages.vacancies');
Route::get('pages/voting', 'PagesController@voting')->name('pages.voting');
Route::get('tables/bootstrap-sortable', 'TablesController@bootstrapSortable')->name('tables.bootstrap-sortable');
Route::get('tables/bootstrap-table', 'TablesController@bootstrapTable')->name('tables.bootstrap-table');
Route::get('tables/bootstrap', 'TablesController@bootstrap')->name('tables.bootstrap');
Route::get('tables/datatables', 'TablesController@datatables')->name('tables.datatables');
Route::get('typography/typography', 'TypographyController@typography')->name('typography.typography');
Route::get('ui/accordion', 'UiController@accordion')->name('ui.accordion');
Route::get('ui/app-brand', 'UiController@appBrand')->name('ui.app-brand');
Route::get('ui/badges', 'UiController@badges')->name('ui.badges');
Route::get('ui/button-groups', 'UiController@buttonGroups')->name('ui.button-groups');
Route::get('ui/buttons', 'UiController@buttons')->name('ui.buttons');
Route::get('ui/cards', 'UiController@cards')->name('ui.cards');
Route::get('ui/carousel', 'UiController@carousel')->name('ui.carousel');
Route::get('ui/cropper', 'UiController@cropper')->name('ui.cropper');
Route::get('ui/drag-and-drop', 'UiController@dragAndDrop')->name('ui.drag-and-drop');
Route::get('ui/dropdowns', 'UiController@dropdowns')->name('ui.dropdowns');
Route::get('ui/footer', 'UiController@footer')->name('ui.footer');
Route::get('ui/fullcalendar', 'UiController@fullcalendar')->name('ui.fullcalendar');
Route::get('ui/lightbox', 'UiController@lightbox')->name('ui.lightbox');
Route::get('ui/list-groups', 'UiController@listGroups')->name('ui.list-groups');
Route::get('ui/media-player', 'UiController@mediaPlayer')->name('ui.media-player');
Route::get('ui/modals', 'UiController@modals')->name('ui.modals');
Route::get('ui/navbar', 'UiController@navbar')->name('ui.navbar');
Route::get('ui/navs', 'UiController@navs')->name('ui.navs');
Route::get('ui/notifications', 'UiController@notifications')->name('ui.notifications');
Route::get('ui/pagination', 'UiController@pagination')->name('ui.pagination');
Route::get('ui/progress', 'UiController@progress')->name('ui.progress');
Route::get('ui/sidenav', 'UiController@sidenav')->name('ui.sidenav');
Route::get('ui/spinners', 'UiController@spinners')->name('ui.spinners');
Route::get('ui/thumbnails', 'UiController@thumbnails')->name('ui.thumbnails');
Route::get('ui/tooltips', 'UiController@tooltips')->name('ui.tooltips');
Route::get('ui/tour', 'UiController@tour')->name('ui.tour');
Route::get('ui/treeview', 'UiController@treeview')->name('ui.treeview');
