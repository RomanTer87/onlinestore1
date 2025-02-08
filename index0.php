<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pizza Olla</title>
  </head>
  <body>
  <div class="wrapper">
        <header class = "header">
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
                    <div class="container-fluid container">
                        <a class="navbar-brand" href="#"><b>Ristorante</b></a>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Italian_cooking_icon.svg/640px-Italian_cooking_icon.svg.png" alt="logo" width="90px">
                        <a class="navbar-brand" href="#"><b>Pizza Olla</b></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="#">Меню</a>
                            <a class="nav-link" href="contacts">О нас</a>
                            <a class="nav-link" href="posts/create">Корзина</a>
                        </div>
                        </div>
                    </div>
            </nav>
        </header>
        <main class="main py-3">
            <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                    <img src="https://adresacafe.ru/wp-content/uploads/2020/01/common-2813-1024x684.jpeg" class="card-img-top" alt="img1">
                    <div class="card-body">
                        <h5 class="card-title">«Маргарита» (Margherita)</h5>
                        <p class="card-text">Томатный соус, моцарелла и орегано.</p>
                        <button type="button" class="btn btn-dark">В корзину</button>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="https://sun9-10.userapi.com/c505536/u199304507/d22/-3/y_3b3ba3befe.jpg" class="card-img-top" alt="img2">
                    <div class="card-body">
                        <h5 class="card-title">«Четыре сезона» (Quattro Stagioni)</h5>
                        <p class="card-text">Томатный соус, моцарелла, грибы, ветчина, артишоки, оливки и орегано.</p>
                        <button type="button" class="btn btn-dark">В корзину</button>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="https://avatars.mds.yandex.net/get-altay/2776652/2a0000017352a0c3080ef539110fcfe7d14b/XXL_height" class="card-img-top" alt="img3">
                    <div class="card-body">
                        <h5 class="card-title">«Четыре сыра» (Quattro Formaggi)</h5>
                        <p class="card-text">Томатный соус, моцарелла, пармезан, сыр горгонзола, артишоки и орегано.</p>
                        <button type="button" class="btn btn-dark">В корзину</button>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="https://cafegloria.ru/wp-content/uploads/2023/12/proshuto_krudo_1050_g-768x512.jpg" class="card-img-top" alt="img4">
                    <div class="card-body">
                        <h5 class="card-title">«Сардиния» (Sarda)</h5>
                        <p class="card-text">Томатный соус, моцарелла, сыр пекорино и острая салями.</p>
                        <button type="button" class="btn btn-dark">В корзину</button>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="https://cdn.digita.media/unimedia/superdesk/20181112101128/16e42cd21d0f06883b899f98cad496fe18238d8bf6ad3d62192aca7b8cdd66a7.jpg" class="card-img-top" alt="img5">
                    <div class="card-body">
                        <h5 class="card-title">«Прошутто» (Prosciutto)</h5>
                        <p class="card-text">Томатный соус, моцарелла, ветчина, орегано.</p>
                        <button type="button" class="btn btn-dark">В корзину</button>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="https://static.tildacdn.com/stor6561-6131-4531-b739-396236633463/92494674.jpg" class="card-img-top" alt="img6">
                    <div class="card-body">
                        <h5 class="card-title">«Монтанара» (Montanara)</h5>
                        <p class="card-text">Томатный соус, моцарелла, грибы, пепперони и Страккино (мягкий сыр).</p>
                        <button type="button" class="btn btn-dark">В корзину</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </main>
        <footer class = "footer">
        <div class="text-bg-dark p-3 text-center">
                &copy; Copyright <?= date('Y') ?>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>