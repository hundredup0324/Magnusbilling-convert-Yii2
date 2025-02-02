<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="<?= Yii::$app->request->baseUrl ?>//images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?= Yii::$app->request->baseUrl ?>//images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="<?= Yii::$app->request->baseUrl ?>//images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?= Yii::$app->request->baseUrl ?>//images/logo-light.png" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">

                <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                    <i class="las ri-team-line"></i> <span data-key="t-dashboards">Clients</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarDashboards">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <?= Html::a('Users', ['client/user'], ['class' => 'nav-link', 'data-key' => 't-crm']) ?>
                        </li>
                        <li class="nav-item">
                            <a href="dashboard-crm" class="nav-link" data-key="t-crm"> SIP Users </a>
                        </li>
                        <li class="nav-item">
                            <a href="dashboard-crm" class="nav-link" data-key="t-crm"> Calls Online </a>
                        </li>
                       
                        <li class="nav-item">
                            <a href="dashboard-crypto" class="nav-link" data-key="t-crypto"> CallerID </a>
                        </li>
                        <li class="nav-item">
                            <a href="dashboard-projects" class="nav-link" data-key="t-projects"> ATA Linksys </a>
                        </li>
                        <li class="nav-item">
                            <a href="dashboard-nft" class="nav-link" data-key="t-nft"> Restricted Number</a>
                        </li>
                        <li class="nav-item">
                            <a href="dashboard-job" class="nav-link" data-key="t-job">Callback</a>
                        </li>
                        <li class="nav-item">
                            <a href="dashboard-blog" class="nav-link"><span data-key="t-blog">Buy Credit</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="dashboard-blog" class="nav-link"><span data-key="t-blog">lax</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="dashboard-blog" class="nav-link"><span data-key="t-blog">Tocken</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="dashboard-blog" class="nav-link"><span data-key="t-blog">Send Credit</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="dashboard-blog" class="nav-link"><span data-key="t-blog">User History</span></a>
                        </li>
                    </ul>
                </div>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="lab ri-money-dollar-box-line"></i> <span data-key="t-apps">Billing</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-chat" class="nav-link" data-key="t-chat"> Refills </a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-file-manager" class="nav-link"> <span data-key="t-file-manager">Payment Methods</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-todo" class="nav-link"> <span data-key="t-to-do">Voucher</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-api-key" class="nav-link" data-key="t-api-key">Refill Providers</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-api-key" class="nav-link" data-key="t-api-key">Fatura</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="lar la-user-circle"></i> <span data-key="t-authentication">DIDs</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-api-key" class="nav-link" data-key="t-api-key">DIDs</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-api-key" class="nav-link" data-key="t-api-key">DID Destination</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-api-key" class="nav-link" data-key="t-api-key">DIDs Use</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-api-key" class="nav-link" data-key="t-api-key">IVRs</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-api-key" class="nav-link" data-key="t-api-key">Queues</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-api-key" class="nav-link" data-key="t-api-key">Queues Members</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-api-key" class="nav-link" data-key="t-api-key">Buy DID</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-api-key" class="nav-link" data-key="t-api-key">Queue Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-api-key" class="nav-link" data-key="t-api-key">DIDww</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-api-key" class="nav-link" data-key="t-api-key">Holidays</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-api-key" class="nav-link" data-key="t-api-key">DID History</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="las la-pager"></i> <span data-key="t-pages">Rates</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="pages-starter" class="nav-link" data-key="t-starter"> Plans </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-team" class="nav-link" data-key="t-team"> Tarriffs </a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-range-area" class="nav-link" data-key="t-range-area">Prefixes</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-faqs" class="nav-link" data-key="t-faqs"> User Custom Rates </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-pricing" class="nav-link" data-key="t-pricing"> Offers </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-gallery" class="nav-link" data-key="t-gallery"> Offer CDR </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-maintenance" class="nav-link" data-key="t-maintenance"> Offer User </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                        <i class="ri-rocket-line"></i> <span data-key="t-landing">Reports</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLanding">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="landing" class="nav-link" data-key="t-one-page"> CDR </a>
                            </li>
                            <li class="nav-item">
                                <a href="nft-landing" class="nav-link" data-key="t-nft-landing"> CDR Failed </a>
                            </li>
                            <li class="nav-item">
                                <a href="job-landing" class="nav-link" data-key="t-job">Summary per Day</a>
                            </li>
                            <li class="nav-item">
                                <a href="job-landing" class="nav-link" data-key="t-job">Summary Day User</a>
                            </li>
                            <li class="nav-item">
                                <a href="job-landing" class="nav-link" data-key="t-job">Summary Day Trunk</a>
                            </li>
                            <li class="nav-item">
                                <a href="job-landing" class="nav-link" data-key="t-job">Summary Day Agent</a>
                            </li>
                            <li class="nav-item">
                                <a href="job-landing" class="nav-link" data-key="t-job">Summary per Month</a>
                            </li>
                            <li class="nav-item">
                                <a href="job-landing" class="nav-link" data-key="t-job">Summary Month User</a>
                            </li>
                            <li class="nav-item">
                                <a href="job-landing" class="nav-link" data-key="t-job">Summary Month Trunk</a>
                            </li>
                            <li class="nav-item">
                                <a href="job-landing" class="nav-link" data-key="t-job">Summary per User</a>
                            </li>
                            <li class="nav-item">
                                <a href="job-landing" class="nav-link" data-key="t-job">Summary per Trunk</a>
                            </li>
                            <li class="nav-item">
                                <a href="job-landing" class="nav-link" data-key="t-job">Call Archive</a>
                            </li>
                            <li class="nav-item">
                                <a href="job-landing" class="nav-link" data-key="t-job">Send Credit Summary</a>
                            </li>
                            <li class="nav-item">
                                <a href="job-landing" class="nav-link" data-key="t-job">Summary Month DID</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="las la-pencil-ruler"></i> <span data-key="t-base-ui">Routes</span>
                    </a>
                    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-alerts" class="nav-link" data-key="t-alerts">Providers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-badges" class="nav-link" data-key="t-badges">Trunks</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-buttons" class="nav-link" data-key="t-buttons">Trunks Groups</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-colors" class="nav-link" data-key="t-colors">Provider Rates</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-cards" class="nav-link" data-key="t-cards">Servers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-carousel" class="nav-link" data-key="t-carousel">Trunk Errors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-dropdowns" class="nav-link" data-key="t-dropdowns">Provider CNL</a>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#settings" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                        <i class="ri-settings-3-line"></i> <span data-key="t-landing">settings</span>
                    </a>
                    <div class="collapse menu-dropdown" id="settings">
                        <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                                        <a href="ui-tabs" class="nav-link" data-key="t-tabs">Menus</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-accordions" class="nav-link" data-key="t-accordion-collapse">Group Users</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-modals" class="nav-link" data-key="t-modals">Configuration</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-offcanvas" class="nav-link" data-key="t-offcanvas">Emails Templates</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-placeholders" class="nav-link" data-key="t-placeholders">Log Users</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-progress" class="nav-link" data-key="t-progress">SMTP</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-notifications" class="nav-link" data-key="t-notifications">API</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-notifications" class="nav-link" data-key="t-notifications">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-notifications" class="nav-link" data-key="t-notifications">Extra2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-notifications" class="nav-link" data-key="t-notifications">Call per Minutes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-notifications" class="nav-link" data-key="t-notifications">Extra3</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-notifications" class="nav-link" data-key="t-notifications">Group to Admins</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-notifications" class="nav-link" data-key="t-notifications">Alarms</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-notifications" class="nav-link" data-key="t-notifications">Backup</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-notifications" class="nav-link" data-key="t-notifications">Sip Trace</a>
                                    </li>
                            
                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link"  href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                        <i class="las  ri-customer-service-2-fill"></i> <span data-key="t-advance-ui">Voice Broadcasting</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="advance-ui-sweetalerts" class="nav-link" data-key="t-sweet-alerts">Campaigns</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-nestable" class="nav-link" data-key="t-nestable-list">Phonebooks</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-scrollbar" class="nav-link" data-key="t-scrollbar">Phonenumbers</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-animation" class="nav-link" data-key="t-animation">Polls</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-tour" class="nav-link" data-key="t-tour">Polls Reports</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-swiper" class="nav-link" data-key="t-swiper-slider">Restrict Phone</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-ratings" class="nav-link" data-key="t-ratings">SMS</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-highlight" class="nav-link" data-key="t-highlight">Quick Campaign</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-scrollspy" class="nav-link" data-key="t-scrollSpy">Campaigns Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-ratings" class="nav-link" data-key="t-ratings">Campaign Report</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                        <i class="lar ri-shopping-bag-line"></i> <span data-key="t-forms">CallShop</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarForms">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="forms-elements" class="nav-link" data-key="t-basic-elements">Booths Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-select" class="nav-link" data-key="t-form-select"> Booths Tariffs </a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-checkboxs-radios" class="nav-link" data-key="t-checkboxs-radios">Summary per Day</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-pickers" class="nav-link" data-key="t-pickers"> Booths </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                        <i class="las  ri-radar-line"></i> <span data-key="t-tables">Services</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTables">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="tables-basic" class="nav-link" data-key="t-basic-tables">Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-gridjs" class="nav-link" data-key="t-grid-js">Services Use</a>
                            </li>
                        
                        </ul>
                    </div>
                </li>

                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
