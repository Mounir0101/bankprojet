<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <header>
    <div class="px-3 py-2 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="/?page=home" class="nav-link text-secondary">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                Home
              </a>
            </li>
            <?php if ($user === false) { ?>
            <li>
              <a href="/?page=signup" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
                Signup
              </a>
            </li>
            <li>
              <a href="/?page=login" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"/></svg>
                Login
              </a>
            </li>
            <?php } else { ?>
                <li>
              <a href="#" class="nave-link text-whit">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                <?= $user->email; ?>
              </a>
            </li> 
               
            <li>
              <a href="/actions/logout.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                Logout
              </a>
            </li>
			<li>
				<a href="/?page=contact" class="nave-link text-whit">
                <svg width="24" height="24" margin: 2px 1em 0 auto;><use xlink:href="#grid"/></svg>
                Contact
              	</a>
            </li>
            <?php } ?>
            <?php $actualRole = 1;
            if ($user !== false) $actualRole = $user->role; ?>
            <?php if ($actualRole == 1000 || $actualRole == 200) { ?>
            <li>
              <a href="/?page=adminPage" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
                Verif user
              </a>
            </li>
            <?php } ?>

            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"/></svg>
                <?php 
                
                if ($actualRole == 10){ ?>
                  Customers  
                <?php } elseif ($actualRole == 200) { ?>
                    Manager
                <?php } elseif ($actualRole == 1000) { ?>
                    Admin
                <?php } else { ?>
                    On hold
               <?php } ?>
                
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>