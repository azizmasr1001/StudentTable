@extends('layout.main')


@section('content')
<link rel="stylesheet" href="{{ ('calculator.css') }}">
<div class="card">
    <div class="card-header">
      Home Page
    </div>
    <div class="card-body">
      <div class="alert alert-info">
        Welcome to my first project
      </div>
      <h1>Inside Out</h1>
    <div class="video-container">
      <video controls autoplay loop style="max-width:100%;height:auto;">
        <source src="{{ asset('/logo/office.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <p>Kuala Lumpur is the capital city of Malaysia and one of the most
        vibrant and dynamic cities in Southeast Asia. With a population of over 7 million people, it is a
        bustling metropolis with a rich history and culture.

        The city is home to numerous iconic landmarks, such as the Petronas Twin Towers,
        the KL Tower, and the Batu Caves. Visitors can also explore the city's diverse neighborhoods,
        each with its own unique character and attractions. The historic district of Merdeka Square is
        home to many colonial-era buildings and museums, while the vibrant Chinatown and Little India areas
        offer a fascinating glimpse into the city's multicultural heritage.</p>
    </div>
    <h1>Know Why?</h1>
    <div class="video-container">

      <p>CRUD stands for Create, Read, Update, and Delete. It's a set of basic operations that are commonly used in software applications that deal with data storage. The term is often used in the context of database management systems, but it can be applied to any system that involves data storage and retrieval.

        Create refers to the operation of adding new data to a system. This can involve creating a new record in a database, adding a new file to a file system, or any other operation that involves creating new data.</p>

        <video controls autoplay loop style="max-width:100%;height:auto;">
        <source src="{{ asset('/logo/aboutus.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>

    </div>
  </div>
@endsection
