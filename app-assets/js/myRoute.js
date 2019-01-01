app.config(function ($routeProvider, $locationProvider) {

    $routeProvider
        .when("/", {
            templateUrl: "home/home",
            //auth: false
        })
        .when("/home", {
            templateUrl: "home/home",
            //auth: false
        })
        .when("/specialpackage", {
            templateUrl: "home/specialpackage",
            //auth: false
        })
        .when("/bestietalk", {
            templateUrl: "home/bestietalk",
            //auth: false
        })
        .when("/bestie01", {
            templateUrl: "home/bestie01",
            //auth: false
        })
        .when("/bestie02", {
            templateUrl: "home/bestie02",
            //auth: false
        })
        .when("/bestie03", {
            templateUrl: "home/bestie03",
            //auth: false
        })
        .when("/bestie04", {
            templateUrl: "home/bestie04",
            //auth: false
        })
        .when("/bestpicks", {
            templateUrl: "home/bestpicks",
            //auth: false
        })
        .when("/howtobuy", {
            templateUrl: "home/howtobuy",
            //auth: false
        })
        .when("/howtosend", {
            templateUrl: "home/howtosend",
            //auth: false
        })
        .when("/questions", {
            templateUrl: "home/questions",
            //auth: false
        })
        .when("/returnproduct", {
            templateUrl: "home/returnproduct",
            //auth: false
        })
        .when("/aboutSHElongs", {
            templateUrl: "home/aboutSHElongs",
            //auth: false
        })
        .when("/Joinme", {
            templateUrl: "home/Joinme",
            //auth: false
        })
        .when("/policy", {
            templateUrl: "home/policy",
            //auth: false
        })
        .when("/condition", {
            templateUrl: "home/condition",
            //auth: false
        })
        .when("/makeuptrends", {
            templateUrl: "home/makeuptrends",
            //auth: false
        })
        .when("/howtopay", {
            templateUrl: "home/howtopay",
            //auth: false
        })
        .when("/contact", {
            templateUrl: "home/contact",
            //auth: false
        })
        .when("/changepassword", {
            templateUrl: "myaccount/changepassword",
            //auth: false
        })


        /*.when("/", {
            templateUrl: "home/login",
            //auth: false
        })*/

        .when("/login", {
            templateUrl: "home/login",
            //auth: true
        })
        /*.when("/start", {
            templateUrl: "home/start",
            auth: true
        })*/

        .when("/confirmpayment", {
            templateUrl: "myaccount/confirmpayment",
            auth: true
        })
        .when("/dashboard", {
            templateUrl: "myaccount/dashboard",
            auth: true
        })
        .when("/quiz", {
            templateUrl: "home/quiz",
            auth: true
        })
        .when("/account", {
            templateUrl: "myaccount/account",
            auth: true
        })
        .when("/beautyprofile", {
            templateUrl: "myaccount/beautyprofile",
            auth: true
        })
        .when("/package", {
            templateUrl: "myaccount/package",
            auth: true
        })
        .when("/editprofile", {
            templateUrl: "myaccount/editprofile",
            auth: true
        })
        .when("/order", {
            templateUrl: "myaccount/order",
            auth: true
        })

    // $locationProvider.html5Mode({
    //     enabled: true,
    //     requireBase: false
    // });
});