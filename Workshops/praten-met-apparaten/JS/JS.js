window.onload = function () {
    var canvas = document.getElementById("trash");
    var ctx = canvas.getContext('2d');

    var height = canvas.height = 500;
    var width = canvas.width = 800;

    var up = false;
    var down = false;
    var right = false;
    var left = false;

    var playerY = 8;
    var playerX = 4;

    var enemyX = Math.floor(Math.random() * 800);
    var enemyY = Math.floor(Math.random() * 500);

    var player_speed = 3;

    var itemX = Math.floor(Math.random() * 800);
    var itemY = Math.floor(Math.random() * 500);

    var squareWidth = 20;
    var squareHeight = 20;

    var draw_loop;
    var move_loop;
    var itemCollision_loop;
    var enemyCollision_loop;
    var pak_loop;


    function draw() {
        /* canvas */
        ctx.fillStyle = "#808080";
        ctx.strokeStyle = "#070707";

        ctx.fillRect(0, 0, 800, 500);
        ctx.strokeRect(0, 0, 800, 500);


        /* Player*/
        ctx.fillStyle = "#02d1e8";
        ctx.strokeStyle = "#070707";

        ctx.fillRect(playerX, playerY, 20, 20);
        ctx.strokeRect(playerX, playerY, 20, 20);
        /* enemy */
        ctx.fillStyle = "#f702b1";
        ctx.strokeStyle = "#070707";

        ctx.fillRect(enemyX, enemyY, 20, 20);
        ctx.strokeRect(enemyX, enemyY, 20, 20);
        /* item */
        ctx.fillStyle = "#f2c900";
        ctx.strokeStyle = "#070707";

        ctx.fillRect(itemX, itemY, 20, 20);
        ctx.strokeRect(itemX, itemY, 20, 20);


    }


    draw();


    /*bewegen*/

    function move() {
        if (up == true) {
            playerY -= 5;
        }

        if (down == true) {
            playerY += 5;
        }

        if (left == true) {
            playerX -= 5;
        }
        if (right == true) {
            playerX += 5;
        }

    }


    window.addEventListener('keydown', function (e) {
        if (e.keyCode == 38) {
            up = true
        }
        if (e.keyCode == 40) {
            down = true
        }
        if (e.keyCode == 37) {
            left = true
        }
        if (e.keyCode == 39) {
            right = true
        }

    })

    window.addEventListener('keyup', function (e) {
        if (e.keyCode == 38) {
            up = false
        }
        if (e.keyCode == 40) {
            down = false
        }
        if (e.keyCode == 37) {
            left = false
        }
        if (e.keyCode == 39) {
            right = false
        }

    })

    function itemCollision() {
        if (playerX + squareWidth - 2 >= itemX &&
            playerX - squareWidth + 2 <= itemX &&
            playerY + squareHeight - 2 >= itemY &&
            playerY - squareHeight + 2 <= itemY &&
            playerX + squareWidth - 2 >= itemY) {
            itemX = Math.floor(Math.random() * 800);
            itemY = Math.floor(Math.random() * 500);
        }
    }



    function pak() {
        if (playerX < enemyX) {
            enemyX -= player_speed;

        }

        if (playerX > enemyX) {
            enemyX += player_speed;

        }

        if (playerY < enemyY) {
            enemyY -= player_speed;

        }
        if (playerY > enemyY) {
            enemyY += player_speed;

        }
    }


    function enemyCollision() {
        if (playerX + squareWidth - 2 >= enemyX &&
            playerY - squareWidth + 2 <= enemyX &&
            playerY + squareHeight - 2 >= enemyY &&
            playerX - squareHeight + 2 <= enemyY) {
            clearInterval(enemyCollision_loop);
            clearInterval(pak_loop);
            clearInterval(itemCollision_loop);
            clearInterval(move_loop);
            clearInterval(draw_loop);
            alert("Game over!");
        }

    }

    move_loop = setInterval(move, 30);
    draw_loop = setInterval(draw, 30);
    enemyCollision_loop = setInterval(enemyCollision, 30);
    pak_loop = setInterval(pak, 30);
    itemCollision_loop = setInterval(itemCollision, 30);



}

