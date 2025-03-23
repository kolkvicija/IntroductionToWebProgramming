$(document).ready(function() {

  $("main#spapp > section").height($(document).height() - 60);

  var app = $.spapp({
    defaultView  : "home",
    templateDir  : "./tpl/",
    pageNotFound : "error_404"
  });

  // define routes

  app.route({
    view: 'home', 
    load: 'body.html'
  });
  app.route({
    view: 'faq', 
    load: 'faq.html'
  });
  app.route({
    view: 'about', 
    load: 'about.html'
  });
  app.route({
    view: 'checkout', 
    load: 'checkout.html'
  });
  app.route({
    view: 'shop', 
    load: 'shop.html'
  });

  // run app
  app.run();

});