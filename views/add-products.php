<!doctype html>
<html lang="es-MX">
<?php include(VIEWS_DIR . "/partials/head.php"); ?>
<body>
    <?php include(VIEWS_DIR . "/partials/header.php"); ?>
    <main class="container">
        <h1>Agregar productos</h1>
        <form action="/api/V1/products" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="product_name">Nombre del producto</label>
                <input type="text" required
                       class="form-control"
                       id="product_name"
                       name="product_name"
                       placeholder="Ingresa el nombre del producto" />
            </div>
            <div class="form-group">
                <label for="sku">SKU</label>
                <input type="text"
                       class="form-control"
                       id="sku"
                       name="sku"
                       placeholder="Ingresa el SKU" />
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" required
                       class="form-control"
                       id="price"
                       name="price"
                       placeholder="Ingresa el precio" />
                <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
            </div>
            <div class="form-group">
                <label for="photo">Imagen del producto</label>
                <input type="file"
                       name="image"
                       class="form-control-file"
                       id="photo">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </main>
    <?php include(VIEWS_DIR . "/partials/footer.php"); ?>
    <?php include(VIEWS_DIR .  "/partials/scripts.php"); ?>
</body>
</html>