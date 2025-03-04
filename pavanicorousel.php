<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        img{
        width:250;
        height:150;
        }

        #imageContainer {
            white-space: nowrap;
            overflow: hidden;
        }

        .scrolling-images {
            display: inline-block;
            margin-right: 10px;
            transition: transform 0.03s linear;
        }

        .scrolling-images:hover {
            animation-play-state: paused;
        }
    </style>
</head>
<body>

<div id="imageContainer">
    <img class="scrolling-images" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROJkA5WWw2K9iaWtNeS75IjbssBcLJXqNkWw&usqp=CAU" alt="Image 1">
    <img class="scrolling-images" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR74ab5Fu0uyvJd6GsCLW3SZ2rhf_Bw1s10rg&usqp=CAU" alt="Image 2">
    <img class="scrolling-images" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkSAvtqtZIGjT6B1PbsBw2bkpie8TQ5jfbrw&usqp=CAU" alt="Image 3" >
    <img class="scrolling-images" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTE4wEdqzQbdSirINAt-oyLEVvGN_x15RYjng&usqp=CAU" alt="Image 1" >
    <img class="scrolling-images" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_1Dxi-w9rCNK01cIMu6jChD3Dkr9mnddYag&usqp=CAU" alt="Image 2">
    <img class="scrolling-images" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjBicnBUKbOJXzZU_-08bBbMZgizzz3M20Zw&usqp=CAU" alt="Image 3">
    <img class="scrolling-images" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTL4SfYXgpJTMFvKVw_z35Wx9310FbT9vH8Vw&usqp=CAU" alt="Image 1" >
    <img class="scrolling-images" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIGrM2GAlSyYTV7nPx59R6SUJr7QC1rw2LCw&usqp=CAU" alt="Image 2">
    <img class="scrolling-images" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSX6FcDIevVGiP29-wjrIoR2_iDOmW6t1Eorw&usqp=CAU" alt="Image 3">
    <img class="scrolling-images" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR24GL-rFXkzvDB0H8J0C4weDCjCtNGm25ovyCMA0zaR1_4K_a9HPxgpzV8ol-eKulamhg&usqp=CAU" alt="Image 1" >
    <img class="scrolling-images" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR109nifkgRCbFHOnc3t3UUborgxn9Saq8v0Q&usqp=CAU" alt="Image 2">
    <img class="scrolling-images" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHr_D1ls-efOQcR6M7O4KCwFZnmGSV1T4UeA&usqp=CAU" alt="Image 3">
</div>

<script>
    const imageContainer = document.getElementById('imageContainer');
    const images = document.querySelectorAll('.scrolling-images');

    let isHovered = false;

    // Clone and append images to create a loop
    images.forEach(img => {
        const clone = img.cloneNode(true);
        imageContainer.appendChild(clone);
    });

    // Calculate the total width of all images
    const totalWidth = Array.from(imageContainer.children).reduce((acc, img) => acc + img.clientWidth + parseInt(getComputedStyle(img).marginRight || 0), 0);

    // Set up event listener for hover
    imageContainer.addEventListener('mouseenter', () => {
        isHovered = true;
    });

    imageContainer.addEventListener('mouseleave', () => {
        isHovered = false;
    });

    function updateScroll() {
        if (!isHovered) {
            // Scroll the images to the left
            imageContainer.scrollLeft += 1;

            // Reset scroll position to the beginning if end is reached
            if (imageContainer.scrollLeft >= totalWidth / 2) {
                imageContainer.scrollLeft = 0;
            }
        }

        // Request the next animation frame
        requestAnimationFrame(updateScroll);
    }

    // Start the scrolling animation
    updateScroll();
</script>

</body>
</html>