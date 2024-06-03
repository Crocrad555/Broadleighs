<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="light.css">
    <link rel="stylesheet" href="dark.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
</head>



<body>
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./login.php">Login</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href=".">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            
            <button type="onclick " onclick="changeCSS()" class="btn btn-light mb-3 " id="Light-mode">Light mode</button>
        </div>
    </div>
</nav>
<div>
            <h1>Our Local area</h1><br>
            <h2>The local area around us is beautiful and it has plenty of things to do!</h2><br>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="Minehead.jpg" alt='Minehead' style="max-width:500px;max-height:300px;" alt="Minehead ">
                    </div>
                    <div class="col">
                        <h4>Minehead</h4>
                        <br>
                        <p>Minehead is a coastal town located in Somerset, England. It is situated on the Bristol Channel, with a long beach and a picturesque harbor. The town has a long history, with evidence of human habitation dating back to the Bronze
                            Age. Today, Minehead is a popular tourist destination, with a variety of attractions including the West Somerset Railway, which offers scenic train rides through the countryside, and the Butlins holiday resort, which provides
                            entertainment and activities for visitors of all ages. The town also has a range of shops, restaurants, and cafes, as well as plenty of opportunities for outdoor activities such as hiking, fishing, and water sports.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h4>Minehead & West Somerset Golf Club</h4>
                        <br>
                        <p>Minehead & West Somerset Golf Club is a picturesque golf course located in Minehead, Somerset, England. The course is situated on the edge of Exmoor National Park and offers stunning views of the surrounding countryside and coastline.
                            The club was founded in 1882 and has since grown to become a popular destination for golf enthusiasts of all levels. The course features 18 challenging holes, with a variety of terrain including hilly sections and some coastal
                            views. The club offers a range of facilities including a clubhouse, pro shop, and practice area, as well as catering and event services. Overall, Minehead & West Somerset Golf Club provides a memorable golfing experience in
                            a beautiful and scenic setting
                        </p>
                    </div>
                    <img src="golf.jpg" style="max-width:500px;max-height:300px;" alt="The Minehead & West Somerset Golf Club ">
                </div>
                <div class="row">
                    <div class="col">
                        <br>
                        <img src="train.webp" style="max-width:500px;max-height:300px;" alt="West Somerset Railway">
                    </div><br>
                    <div class="col">
                        <br>
                        <h4>West Somerset Railway</h4>
                        <br>
                        <p>The West Somerset Railway is a charming heritage railway located in Somerset, England. It spans a picturesque 22 miles, taking passengers on a nostalgic journey through the beautiful countryside of the Quantock Hills and Exmoor
                            National Park. The railway line, originally built in 1862, was lovingly restored by dedicated volunteers after it faced closure in the 1970s. Today, visitors can step back in time as they board meticulously preserved steam
                            and diesel locomotives, enjoying the rhythmic chug of the engine and the gentle sway of the carriages. The West Somerset Railway offers a delightful experience for both railway enthusiasts and those seeking a tranquil and scenic
                            adventure in the heart of the English countryside. </p>
                    </div>

                </div>
            </div>
        </div>
</div>  
    
</body>
    


<footer>Broadleigh Gardens | Login
All pictures on this site Christine Skelmersdale are available for licensing. All rights reserved.</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
