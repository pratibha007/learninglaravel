@extends('main')



@section('content')
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    
    <title>Laravel blog</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
     <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  </head>
    <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
  
    <h1>Welcome to my blog</h1>
    <p class="lead">Thank you for visiting. This is my test website with laravel. Please read my posts and subscribe them.</p>
    <p><a class="btn btn-primary btn-lg">Popular Post</a></p>
  </div></div>
  </div>
  <div class="row">
    <div class="col-md-8">
     <div class="post">
     <h3>Post Title</h3> 
     <p>This article is about the domestic dog. For related species known as "dogs", see Canidae. For other uses, see Dog (disambiguation).
"Doggie" redirects here. For the Danish artist, see Doggie (artist).</p>
<a href="#" class="btn btn-primary"> Read More</a>
    </div>
    <hr>
    <div class="post">
     <h3>Post Title</h3> 
     <p>The domestic dog (Canis lupus familiaris or Canis familiaris) is a member of genus Canis (canines) that forms part of the wolf-like canids,and is the most widely abundant carnivore.</p>
<a href="#" class="btn btn-primary"> Read More</a>
    </div>
    <hr>
    <div class="post">
     <h3>Post Title</h3> 
     <p>Domestication is a sustained multi-generational relationship in which one group of organisms assumes a significant degree of influence over the reproduction and care of another group to secure a more predictable supply of resources from that second group.</p>
<a href="#" class="btn btn-primary"> Read More
    </div></a>
   <hr>
<div class="post">
     <h3>Post Title</h3> 
     <p>Charles Darwin recognized the small number of traits that made domestic species different from their wild ancestors. He was also the first to recognize the difference between conscious selective breeding in which humans directly select for desirable traits, and unconscious selection where traits evolve as a by-product of natural selection or from selection on other traits</p>
<a href="#" class="btn btn-primary"> Read More</a>
    </div>
    </div>
    
  

    <div class="col-md-3 col-md-offset-1"><h2>Sidebar</h2>
    </div>
  </div>
@endsection


    