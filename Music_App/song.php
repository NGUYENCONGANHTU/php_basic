<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: login.php");
    exit();
}

// Danh mục nhạc
$categories = [
    ['id' => 1, 'name' => 'Nhạc trẻ'],
    ['id' => 2, 'name' => 'Nhạc Âu Mỹ'],
    ['id' => 3, 'name' => 'Nhạc Nhật Bổn'],
];

// Bài hát theo danh mục
$songs = [
    'Nhạc trẻ' => [
        ['title' => 'Xin đừng lặng im', 'artist' => 'SoBin Hoàng Sơn'],
        ['title' => 'Lao tâm khổ tứ', 'artist' => 'Thanh Hưng'],
        ['title' => 'Tay nắm tay rời', 'artist' => 'Phạm Đình Thái Ngân'],
    ],
    'Nhạc Âu Mỹ' => [
        ['title' => 'Song 1', 'artist' => 'Artist A'],
        ['title' => 'Song 2', 'artist' => 'Artist B'],
    ],
    'Nhạc Nhật Bổn' => [
        ['title' => '曲 1', 'artist' => 'アーティスト A'],
        ['title' => '曲 2', 'artist' => 'アーティスト B'],
    ],
];

// Lấy danh mục từ GET parameter
$category_name = isset($_GET['category']) ? $_GET['category'] : null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài hát - <?php echo htmlspecialchars($category_name); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <header>
        <header class="bg-white  shadow-md py-1">
            <div class="container mx-auto px-4 grid grid-cols-3 items-center">
                <!-- Logo Section -->
                <div class="col-span-1">
                    <a href="index.php" class="text-2xl font-bold text-gray-800"><img class="w-50 h-14"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAflBMVEX///8AAADv7++RkZEzMzPg4OCvr68wMDD8/PysrKzo6OiEhIQtLS2BgYHw8PDT09O7u7vk5OS0tLSdnZ1aWlrJycmmpqZTU1PY2NgdHR13d3dDQ0M6OjpOTk5eXl4iIiJra2tnZ2eOjo55eXlGRkYPDw+ZmZknJycXFxcMDAzW/sxkAAAHiUlEQVR4nO2a63aqOhRGwUvFSxVFtCpatbZ1v/8LHiUrYa0kKCoO99njm39aIYRkElZuBAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA8I8SvW0Ww1cX4u9iH56IXl2Kv4nx8axk8epiMHpp+7UFGIU5S/dE9y1ncuX6aslu4OtUnPkrm+1YKQlT50yTzoTjixksKNWgrhJN8+w+68ruDqhKR/fMj3byfun6kU6V1VSgD8qvvnZ3KwmVIHZPGSfhpQx2dTvpUn79mvK7HSrAxnOqcNItv74R1u0kpvx+asrv3gJ4Y0HhpFOeQZGoVVORIsrvZV3Pl6qzN8ibGBuGo9IMwtqdBOm1tvlkVhdiKHOyLbs+foKTYPwVbi/3dU/lbKRXco45CcsG/vNnOHkB7dlys03U6zDOK5s2p9l8t4/lK8SdlAS8cfhPOJl0dCWWSku8K+q15G2GOynpjvf/gpP2L69ouEw2oSQp0gon7jD3DE/xf3USh1eZmsTCyfxqdnc4GY7SOE3L4plN45x6VPeSRnpdSRiudFQhJ9SSfCXPe61wkHEnm9Uqy7JPq+jxIDussw4PS+nyW99yI8bxh2y9Xq+sUeTENOjP9/KRwe3wiFjOu+UkVUXfu/m1VYJ4zZ0M1MGGTPqmjhbj9fhT3pXZIlX88kQmPtY3FxpUUfJmkpOTUdMto+KdTqjmQoNdCuFWs7KcRGvnvkczIjmqA0UnOHIShyvL+b3Mqihhw0fdTnrqrzNLpEF4Mzhcd9IVTqJF6EEP5r+tHCbeglaNQpepooSvLOl2EqiHurLzo2ffoPPkZFDByaq44R9280g40S3Br8R5O++iQp8jF2WNE7rSnpS18qOnWOhzYo3NhRNTklnvdL9GrBXRA/kj6twuCrdrJs2l+VVH37+roGTGLyAnH7qFWdMiWvtJ9QC/ejuhJEWvryfXDY8TE4t1XJ3opiUKex8VlMhpDTlpm//k0F89sfPS9o1OqPv7ZafV9Jw6HyFIB8HP4uaRblcPK+lVUCJDRuGEFo7e+FmKsMntTujV4Y95qA4dXCe+p6VXWB7ukT0dmoN8OwonwYbXWtQyKnFiRUDuZOap0U4dc5zo0COnFhTdvWPrW6jiRI7LmBMaAH+ws6ru2/O/07uciHDQSHPyF4Q7odHrwapMWDyQR3iondDq/tLJLrd0oxN69qWbbFSYIfvfHhtRUH504amKE9kYuZOZ/WC2+W/VH/qcWPOdLpOul7WzkmEXc6L3NR6sexlVnMh9Ju6Ewppp7/RbRd0bnQRmYD/v+rQwJzRec4aLNVFsOlxAFJE7oZ7XrO8n/Pnd6oQNw8LF8s0eC9KZ89tH78iuPg3eW11E7DMJJ9SK9TT9yJMrJxfnxcKJ7jcM04RHBuZk7ylWnbhTUQ+8KsJJoBZJtuoH9UNUk5udeOYZq6Jrdp08bfur6ZTDw8G9gJzQq63eCWVhTQnnHif+MZvp2Hrz0Oao2yBz0lf/JsGTqBJkxasrnQSseNbqgXDyW8nJKY8+nxLzqjMnz24nlQIK3zm2nKhnln9/QEXVCX1OrMDpOjnR7m7lvWNeThZjL37Y8BDLsBILXR3LCTWO1JTaPD2fkw9xa7+TM434/bu4d36IOaFgPHUuq4tKK9RnaBRiOaGqT63QEvidWOvISZmTMx/maeXjHeZEv+91apAcKzqhZ2w7SXVZVRdURB7hpON1sr3kpBix5HkyJ2XfGPTiE2law75GpQXZYtRoO6FFwWbbrrVwQl2+NY8PLzvR7ShjafPeXOl3Big7dbiOjfZqTvS8vFhnI1TEW6iWzuYBYi9j56uFHo+cnaStw3q6W8ppHXkesFLmTvQmhmwRekxeg5JqDcWsczpOhjwZm+oLJ3oYJObx+q09O9GLW6JktPZ2sJ3o2ssdsKXv4L1YG01ezPKN4yTYsWSszuLd0ZGc9xVmDy9/d34dqeZp5a2LO9GBKGyyxP6FpnupMG5z9ouZE9Zz8U0P4USHxfCgh/eNYuvineXLo4FuOyPHiVkyLW6oW3tdXzn3rzop3lzXCWtnvCcQTtgwaBu3G+1J/qRpkytvB+YVNCFFb+GoqbVcty+mJPtRFEQfiSlDbdvGrStKWH/hcWL2bcVHjtKJd1EiZk5YNaf7JPnZmZ+qlvRDP5yyuatnA/tOhiV3IHhn6XFirhZdrXRiPnBlzMbcSWB/9ELQfOePdBJ0vIm/alNSLOd5EZHc48SEPJGlWCsIPC9oX99V99DeaYae/dpOKH8Jj7mPI+LsesqfglzP8jmhi2W7tZ3YfX4S2E48m8CfJjyEthO35X3X+QnKmR4NDrNZHvmjVD98a5li73FCIw25EqDeHd4N9NiEd30Ox+SkeDWjHzb1O3VSbAjnOgmiGf/m7PcZ387Gq846YfWK4v502rfXi6PhicjZQ4ki+1ikkMcmy6zVam3MqmKj1x6NxGC8Pdt1Tklaq6+JWJXzZZd/rZnlibvWlBsAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA+J/yH9CfUXpYgRGEAAAAAElFTkSuQmCC"
                            alt="">
                    </a>
                </div>
                <!-- Menu Section -->
                <nav class="col-span-1 text-center space-x-8">
                    <a href="index.php" class="text-gray-700 hover:text-blue-500">Home</a>
                </nav>

                <!-- Login Section -->
                <div class="col-span-1 flex justify-end item-center">
                    <a href="login.php" class="text-gray-700 hover:text-blue-500 font-semibold ml-2">
                        <h1>Xin chào, <?php echo $_SESSION['name'] ?></h1>
                    </a>
                </div>
            </div>
        </header>
    </header>

    <main class="container mx-auto mt-5 px-4">
        <h2 class="text-2xl font-bold mb-4"><?php echo htmlspecialchars($category_name); ?></h2>
        <ul>
            <?php if ($category_name && isset($songs[$category_name])): ?>
            <?php foreach ($songs[$category_name] as $song): ?>
            <li>
                <a>
                    <?php echo htmlspecialchars($song['title']) . ' - ' . htmlspecialchars($song['artist']); ?>
                </a>
            </li>
            <?php endforeach; ?>
            <?php else: ?>
            <li>Không có bài hát nào trong danh mục này.</li>
            <?php endif; ?>
        </ul>
    </main>
</body>

</html>