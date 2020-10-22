<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="<?php echo $str_language; ?>" xml:lang="<?php echo $str_language; ?>">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>CSS Tutorial</title>


<style>
    #main {}
    img {}

    h2 {
        text-align: center;
    }
    .masthead{}
    .content{
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin: 30px auto;
        width: 80%;
    }
    .row {
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

    .column {
        margin: 10px 10px;
        width: 325px;
        height: 250px;
        padding: 20px 25px;
    }

    .top-row .column-2 {
        background-color: #ecd2d2;
    }

    .bottom-row .column-2 {
        background-color: #cecede;

    }

    .bottom-row .column-1 {
        background-color:  #e6e6a4;
    }

    .wc-button {
        width: 100px;
        heigh: 50px;
        color: #ffffff;
        background-color: red;
    }

    .delete-me {
        color: red;
        font-size: 24px;
    }


</style>
</head>
<body>
<div id="main">
    <div class="masthead">
        <h1>CSS Tutorial Page</h1>
    </div>
    <div class="content">
        <div class="top-row row">
            <div class="column-1 column">
                <img src="zinnias.jpg">
            </div>
            <div class="column-2 column">
                <h2>Lorem</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu
                </p>
            </div>
        </div>
        <div class="bottom-row row">
            <div class="column-1 column">
                <h2>Lorem</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu
                </p>
            </div>
            <div class="column-2 column">
                <h2>Lorem</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu
                </p>
            </div>
            <div class="column-3 column">
                <img src="zinnias.jpg"">
            </div>
        </div>
        <div id="buttton-div" class="button-row row">
            <div class="column-1 column">
                <button href="#" id="panic-button" class="wc-button">Panic!</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>
