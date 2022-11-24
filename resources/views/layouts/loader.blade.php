<style>
    #pageloader {

        position: fixed;
        z-index: 932142349;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: black;
        opacity: 0.5;
        display: none;
        justify-content: center;
        align-items: center;

    }

    #pageloader img {

        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    #pageloader h1 {

        position: absolute;
        left: 50%;
        top: 30%;
        transform: translate(-50%, -50%);
    }
   

</style>

<div id="pageloader">
    
    <img src="{{ URL::to('/') }}/public/images/cube2.gif" />
</div>
