<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lumikhans</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style>

<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
     integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
     <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">        
        <div class="first">
            <br>
            <br>
        <div class="container"><h1>Lumikhans</h1>
        
         <nav class="navbar navbar-expand">
                  <ul class="navbar-nav">
                      <li class="nav-item active">
                           <a class="nav-link" href="#">Home</a>
                       </li>
                      <li class="nav-item">
                            <a class="nav-link" href="#">Company</a>
                      </li>
                      <li class="nav-item">
                            <a class="nav-link" href="#">Developers</a>
                      </li>
                      <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                      </li>                     
                  </ul>
                  <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Register</a>
                        </li>
                    </ul>
           </nav>
         </div>                  
      </div>
      <div class="message">
          <div class="container">
              <h2 class="text-center">Expand Your Skills With Us</h2>
              <p class="text-center"><i><b>Atelier Lumikaha</b> serves up smart, streamlined back-office work. It attracts <b>great</b> people who stay and get bettter and more efficient. </i></p>
              <p class="text-center">Scaling challenges businesses with distraction, attrition, regulation, and unchecked expenses.
Lumikha is your go to for smart, scalable business services — we’ve been delivering projects from the Philippines for over a decade. Tenured, capable, dedicated teams smoothly scale your back-office for less.</p>
              <div class="row">
                    <div class="col-12 text-center">
                      <button type="button"><a href="#">Read more</a></button>
                    </div>
              </div>
          </div>
      </div>
      <div class="what_to_do container">
           <h2 class="text-center">What We Do</h2>
           <div class="row container">
                <div class="col-12 col-md-4 col-lg-4 col-xl-4 text-center">
                    <i class="text-center fab fa-pagelines"></i>
                    <h3>Train Fresh Agents</h3>
                    <p> Atelier screen and train newbies in order to manage the inevitable challenges. 
of deployment.</p>
                    <div class="row">
                          <div class="col-12 text-center">
                            <button type="button"><a href="#">Read our articles</a></button>
                          </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-4 text-center">
                   <i class="text-center fas fa-coffee"></i>
                   <h3>Take A Break</h3>
                   <p> Employees were given adequate time to rest, in effect, they provide quality work output.</p>
                   <div class="row">
                         <div class="col-12 text-center">
                           <button type="button"><a href="#">Read our articles</a></button>
                         </div>
                   </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-4 text-center">
                    <i class="text-center fas fa-table"></i>
                    <h3>Organize Platforms</h3>
                    <p>Atelier plan in advance on what to do next and what not to do, so as to use time wisely and efficiently. </p>
                    <div class="row">
                          <div class="col-12 text-center">
                            <button type="button"><a href="#">Read moreour articles</a></button>
                          </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="four">
          <div class="container">
               <h1 class="text-center">There are many variations of passages of Lorem Ipsum available?</h1>
               <div class="row">
                     <div class="col-12 text-center">
                       <button type="button"><a href="#">Read more</a></button>
                     </div>
               </div>
          </div>
      </div>
      <div class="five">
          <h2 class="text-center">Our Team</h2>
          <br>
          <div class="row container-center">
              <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                  <img src="images/cup/9.jpeg">
              </div>
              <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                  <img src="images/cup/10.jpeg">
              </div>
              <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                  <img src="images/cup/11.jpeg">
              </div>
              <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                  <img src="images/cup/13.jpeg">
              </div>
          </div>
          <br>
          <div class="row container-center">
              <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                  <img src="images/cup/14.jpeg">
              </div>
              <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                  <img src="images/cup/15.jpeg">
              </div>
              <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                  <img src="images/cup/16.jpeg">
              </div>
              <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                  <img src="images/cup/17.jpeg">
              </div>
          </div>
          
      </div>
      <div class="six">
        <div class="container text-center">
            <i class="fas fa-quote-left"></i>
            <p>“Attitude is a little thing that makes a BIG difference.” “Success is not final, failure is not fatal, it is the courage to continue that counts.” “If you're going through hell, keep going.” "Everyone has his day, and some days last longer than others."</p>
        </div>
        <div class="people row">
          <div class="col-12 col-md-4 col-lg-4 col-xl-4">
              <img class="rounded-circle" src="images/people/4.jpeg">
              <h3 class="text-center">Our Director</h3>
              <p class="text-center">As we look ahead into the next century, leaders will be those who empower others.</p>
          </div>
          <div class="col-12 col-md-4 col-lg-4 col-xl-4">
              <img class="rounded-circle" src="images/people/5.jpeg">
              <h3 class="text-center">Our manager</h3>
              <p class="text-center">If it is thinkable then it is doable.</p>
          </div>
          <div class="col-12 col-md-4 col-lg-4 col-xl-4">
              <img class="rounded-circle" src="images/people/4.jpeg">
              <h3 class="text-center">Our developer</h3>
              <p class="text-center">Designs are the life of a designer.</p>
          </div>
        </div>
      </div>
      <div class="letter text-center">
        <h1 class="text-center">Subscribe to get more info</h1>
        <p class="text-center">Boost motivation, and you'll boost reading</p>
        <div class="container">
          <form action="/action_page.php">
              <div class="form-group">
                 <input type="email" class="form-control" id="email">
               </div>
                <div class="form-group">
                <input type="telephone" class="form-control" id="pwd">
                </div>
           </form>
           <div class="row">
                 <div class="col-12 text-center">
                   <button type="button"><a href="#">Read more</a></button>
                 </div>
           </div>
        </div>
      </div>
      <footer>
          <p class="text-center">All Rights Reserve 2021<br>
          Contact Us:  <a href="https://lumikha.co/"> Atelier Lumikha
        </p>
      </footer>
    </body>
</html>
