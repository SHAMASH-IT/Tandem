<?php
$route = array( 
    'admin' => array(

        //Dashboard
        'admin/dashboard' => 'dashboardController@dashboardShow',
 
        // Categories
        'admin/categories' => 'categoryController@categoryShowAll',
        'admin/categories/delete' => 'categoryController@categoryDelete',
        'admin/categories/create' => 'categoryController@categoryCreate',
        'admin/categories/update' => 'categoryController@categoryUpdate',
    
        // Options
        'admin/options' => 'optionController@optionShowAll',
        'admin/options/delete' => 'optionController@optionDelete',
        'admin/options/create' => 'optionController@optionCreate',
        'admin/options/update' => 'optionController@optionUpdate',
        
        // Formations
        'admin' => 'formationController@formationShowAll',
        'admin/formations' => 'formationController@formationShowAll',
        'admin/formations/delete' => 'formationController@formationDelete',
        'admin/formations/update' => 'formationController@formationUpdate',
        
        // Meta
        'admin/meta' => 'metaController@metaShowAll',
        'admin/meta/update' => 'metaController@metaUpdate',
        'admin/meta/delete' => 'metaController@metaDelete',
        
        // Events
        'admin/events' => 'eventsController@eventsShowAll',
        'admin/events/update' => 'eventsController@eventsUpdate',
        'admin/events/delete' => 'eventsController@eventsDelete',

        // Orders
        'admin/orders' => 'orderController@orderShowAll',
        'admin/orders/delete' => 'orderController@orderDelete',
        'admin/orders/update' => 'orderController@orderUpdate',
        
        // Clients
        'admin/clients' => 'clientController@clientShowAll',
        'admin/clients/delete' => 'clientController@clientDelete',
        
        // Contacts
        'admin/contacts' => 'contactController@contactShowAll',
        'admin/contacts/delete' => 'contactController@contactDelete',
        
        // Settings
        'admin/settings' => 'settingController@settingsUpdate',
        
        // Read sent email
        'admin/make/backup' => 'settingController@makeBackup',

        // Auth
        'admin/logout' => 'authController@logout',



        // AJAX
        'api/tag/add' => 'tagController@addTag',
        'api/tag/delete' => 'tagController@deleteTag',
        'api/image/upload' => 'imageController@upload_images',
        'api/image/delete' => 'imageController@delete_image',
        'api/image/save' => 'imageController@update_image',


        'api/formation/display/toggle' => 'formationController@formationToggleStatus',
        'api/formation/stock/toggle' => 'formationController@formationToggleStock',
        'api/order/status' => 'orderController@orderStatus',
        'api/order/transaction' => 'orderController@orderTransaction',

         
        
    ),
    'public' => array(
        'api/contact/send' => 'APIController@contact',
        'api/offre/demand' => 'APIController@offer',
        'api/cours/registered' => 'APIController@registered',

        'sign-up' => 'publicController@registered',
        'contact-us' => 'publicController@contactUs',
        'company-offre' => 'publicController@companyOffer',

        
        'junior/summer-sessions' => 'formationController@fetchSummerSessionLanguages',
        
        'kids' => 'kidsController@index',
        'kids/summer-club' => 'kidsController@summerClub',

        'language-village' => 'juniorController@LanguageVillage',
        'team-building' => 'publicController@teamBuilding',

        'tesol-tefl-resume' => 'ittiController@tesolTeflResume',

        'kids/annual-sessions-children' => 'kidsController@annualSessionsChildren',
        'teen/annual-sessions' => 'juniorController@annualSessionsTeen',
        
        'itti-tesol-tefl-course-curriculum' => 'ittiController@ittiTesolTeflCourseCurriculum',

        'certificat/langue-arabe-cim' => 'CimController@index',


        'itti-why' => 'ittiController@whyItti',
        'itti-in-class' => 'ittiController@inClassItti',
        'itti-Combined-TEFL-Certification-Courses' => 'ittiController@CombinedTEFLCertificationCourses',
        'itti-level-5-tefl-certificate-course' => 'ittiController@Level5TEFLCertificateCourse',
        'itti-online-tefl-certification-120-Hour' => 'ittiController@onlineTEFLCertification120Hour',
        'itti-online-tefl-certification-220-Hour' => 'ittiController@onlineTEFLCertification220Hour',
        'itti-online-tefl-certification-500-Hour' => 'ittiController@onlineTEFLCertification500Hour',

        'itti-specialized-how-to-teach-ielts' => 'ittiController@ittiSpecializedHowToTeachIelts',
        'itti-specialized-how-to-teach-tofel' => 'ittiController@ittiSpecializedHowToTeachTofel',
        'itti-specialized-how-to-teach-young-learners' => 'ittiController@ittiSpecializedHowToTeachYoungLearners',
        'itti-specialized-How-to-teach-business-english' => 'ittiController@ittiSpecializedHowToTeachBusinessEnglish',

        '' => 'publicController@index', // C bon
        'faq' => 'publicController@faq', // C bon
        'formation/*' => 'formationController@formationFetch', // C bon
        'category/*' => 'categoryController@categoryFetch', 
        'cours/*' => 'categoryController@tagFetch', // C bon
        'contact' => 'publicController@contact', // C bon
        'about' => 'publicController@about', // C bon

        'gallery' => 'publicController@gallery', // C bon
        'cours/entreprise' => 'publicController@entreprise', // C bon
        'cours/entreprise/inter-entreprise' => 'publicController@entreprise', // C bon
        'cours/entreprise/intra-entreprise' => 'publicController@entreprise', // C bon
        'sejour-linguistique' => 'publicController@sejour', // C bon
        'co-working-space' => 'publicController@coworking', // C bon
        'personal-development-seminar' => 'publicController@devperso', // C bon
        'devenir-enseignant' => 'publicController@tuteur', // C bon
        'conferences' => 'publicController@conferences', // C bon
        'conferences/itti' => 'publicController@itti', // C bon
        'information' => 'publicController@information', // C bon
        'junior' => 'publicController@junior', // C bon
        // 'category/adultes/langues/course-details' => 'publicController@formation', // C bon

        // 'course' => 'publicController@course',
        'contact/send' => 'contactController@contactSend',
        'inscription' => 'publicController@inscription',
        'inscription/send' => 'contactController@inscription',
        
        'contact/send' => 'contactController@contactSend',
        'contact/merci' => 'contactController@contactMerci',
        'formation/checkout' => 'orderController@orderCheckout',
        'formation/checkout/merci' => 'orderController@orderCheckoutMerci',
        'search' => 'publicController@search', 
        'login' => 'authController@login',
        
        // Test
        'test' => 'testController@test',
        'test/upload' => 'testController@upload',

        '404' => 'publicController@pageNotfound', // C bon
    )
);
