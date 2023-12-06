<!DOCTYPE html>
<html>
<head>
        <title>My Blade File</title>
</head>
<body>
        <h1>Welcome to my Blade file!</h1>
        <>
            <div
                className="contenedorGrande grid mb-2 grid-cols-3 grid-rows-2"
                onClick={handleClick}
            >
                <div className="imagenMascota row-span-2 w-28">
                    <img
                        className="object-cover h-28 w-28 rounded-xl"
                        src="<?php echo $mascotaImg; ?>"
                        alt="<?php echo $mascotaTitle; ?>"
                    />
                </div>
                <div className="tituloMascota col-span-2 ml-6 mt-3">
                    <h2 className="line-clamp-2 w-auto font-semibold"><?php echo $mascotaTitle; ?></h2>
                </div>
                <div className="especieNoticia col-span-2 ml-6 mt-1.5">
                    <div
                        className="w-fit p-1 rounded-full <?php echo $newsOrigin === 'Ave' ? 'bg-verde' : ($newsOrigin === 'Gato' ? 'bg-rojo' : ''); ?>"
                    >
                        <p className="text-white p-0 px-2 text-sm"><?php echo $newsOrigin; ?></p>
                    </div>
                </div>
            </div>
        </>
        <script src="app.js"></script>
</body>
</html>
