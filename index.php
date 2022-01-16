<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="icon" href="favicon.ico">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Island+Moments&family=Merriweather+Sans:ital,wght@1,300&family=Montserrat&family=PT+Sans:ital@1&family=Sacramento&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/ce03efd836.js"></script>
</head>

<body>
    <section id="vote-title">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark">

                <a class="navbar-brand" href="">Online Voting Portal</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Hi Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Logout</a>
                        </li>
                    </ul>
                    <form class="form-inline">
                        <button class="btn btn-primary" type="button">Reset Voting</button>
                    </form>
            </nav>
            </div>
            <div class="row" id="sec">
                <div class="col-winner col-lg-3 col-md-6 col-sm-6 win" id="tab1">
                    <table>
                        <th>
                            <h2 class="thead">Winner Party</h2>
                            <hr>
                        </th>
                        <tr>
                            <td>BJP</td>
                            <td>1 Votes</td>
                        </tr>
                    </table>
                </div>

                <div class="card-col col-lg-3 col-sm-6 col-md-6 form-1">

                    <form action="connect.php" method="POST">
                        <h3>Add New Party</h3>
                        <input type="text" placeholder="Party Name" size="25" name="partyname"><br>
                        <button class="btn btn-success btn-1" type="submit"> Add Now </button>
                    </form>


                </div>

                <div class="card-col col-lg-3 col-md-6 col-sm-6 form-2">
                    <form action="connect.php" method="POST">
                        <h3>Add New Voter</h3>
                        <input type="text" placeholder="Voter Email" class="ip1" size="30" name="Voteremail">
                        <input type="text" placeholder="Voter Name" class="ip1" size="30" name="Votername">
                        <div class="form-check c-box2">
                            <input class="form-check-input rbtn" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                            <label class="form-check-label label1" for="flexRadioDefault1">
                                  Add
                                </label>
                            <div class="form-check c-box2">
                                <input class="form-check-input rbtn" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked required>
                                <label class="form-check-label label2" for="flexRadioDefault2">
                                 Remove
                                </label>
                                <button class="btn btn-success btn-2" type="submit"> Add Now </button>
                    </form>
                    </div>

                    </div>
                </div>
                <div id="t2">
                    <h4 class="partyhead">All Parties</h4>
                    <table class="table2">
                        <tr>
                            <th class="table2-th">sno</th>
                            <th class="table2-th">Name</th>
                            <th class="table2-th">Vote</th>
                            <th class="table2-th">Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>SPA</td>
                            <td>0</td>
                            <td><button class="btn btn-primary">Remove</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>BJP</td>
                            <td>1</td>
                            <td><button class="btn btn-primary">Remove</button></td>
                        </tr>

                    </table>
                </div>


    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>