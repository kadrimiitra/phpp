<!doctype html>
<html lang="et">
    <head>
        <title>CV</title>

        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />


        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

       <style>
        h1{
    font-size: 60px;
}
h2{
    font-size: 45px;
}
h3{
    font-size: 30px;
    color: rgb(99, 99, 99);
}
p{
    color: rgb(99, 99, 99);
    font-size: 18px;
}
.containerFirst {
    display: flex;
    max-width: 1000px;
    flex-wrap: wrap;
    margin-top: 100px;
    padding-left: 220px;
}
.column {
    flex: 1;
padding: 10px;
display: flex;
  flex-direction: column;


}
.column img {
    width: 300px;
    padding-top: 70px;
}
@media (max-width: 768px) {
    .containerFirst {
        display: block;
        padding-left:20px;
    }
    .column
        .column {
            width: 100%;
            align-items: center;
        }
        .column img {
            margin: 0 auto;
        }

}
.navbar {
    background-color: transparent !important;
  }
  .purple-link {
    color: #7551bc !important;
  }
  .btn{
    background-color: #7551bc!important;
    color: #fff;
    padding: 10px;
  }
  .containerButton{
    padding-top: 20px;
  }
  .containerTekst {
    text-align: center;
    margin-top: 100px;
  }

  .containerSecond {
    display: flex;
    max-width: 1000px;
    flex-wrap: wrap;
    margin-top: 100px;
    padding-left: 140px;

}
@media (max-width: 768px) {
    .containerSecond {
        display: block;
        padding-left:0;
    }
    .columnSecond {

      width: 100%;
    }
}
.columnSecond {
    flex: 1;
padding: 10px;
display: flex;
  flex-direction: column;
}
.containerNumber{
    display: flex;
}
.years, .projects, .company {
    flex: 1;
    text-align: center;
  }
  .columnSecond img {
    height: 400px;
  }
  .footer1 {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .footer1 svg {
    margin-right: 5px;
    color: #fff;
  }
  .footer1 p {
    margin-top: 15px;
    color: #fff;
  }
   .arrow {
    float: right;
    color: #fff;

  }
.footer{
    background-color: #7551bc;
    padding-top: 50px;
    padding-bottom: 20px;
    margin-top: 50px;
}
</style>
    </head>

    <body>


<div class="container">


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand me-auto" href="#">Kadri.ee</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active purple-link" aria-current="page" href="avaleht.php">Avaleht</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tehtudtood.php">Tehtud tööd</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?=oskused" onclick="checkPageExists('oskused.php')">Oskused</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?=kontakt" onclick="checkPageExists('kontakt.php')">Kontakt</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Admin</a>
        </li>
    </div>
  </div>
</nav>

<script>
function checkPageExists(page) {
    fetch(page)
        .then(response => {
            if (!response.ok) {
                throw new Error('Lehte ei leitud');
            }
        })
        .catch(error => {
            alert('Lehte ei leitud');
        });
}
</script>