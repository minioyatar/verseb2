<?PHP
    require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/account/admin-header.php" : $_SERVER['DOCUMENT_ROOT'] . "/account/admin-header.php");
?>

        <div class="container">
            <?php 
                if(Session::exists('admin')){
            ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <section>
                                <?php           
                                    echo '<h4>' . Session::flash('admin') . '</h4>';
                                ?>
                            </section>     
                        </div>
                    </div>
            <?php                 
                }         
            ?>            
            <div class="row">
                <div class="col-lg-4">
                    <div class="col-lg-12 pipe-wall">
                        <h2 class="section-heading">Blogs</h2>
                        <p class="lead section-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>

                         <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Month</th>
                                    <th>Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>DEC</td>
                                    <td>Year-end recap of the Golden Rules and the 70% Rules</td>
                                </tr>
                                <tr>
                                    <td>NOV</td>
                                    <td>Acting & Reacting in Shakespeare</td>
                                </tr><tr>
                                    <td>OCT</td>
                                    <td>Pace' should not be confused with 'fast'</td>
                                </tr>
                                <tr>
                                    <td>SEP</td>
                                    <td>Emphasis doesn’t always need to be emphatic</td>
                                </tr>
                                <tr>
                                    <td>AUG</td>
                                    <td>The curious case of –ion, -ience and –ient endings</td>
                                </tr>
                                <tr>
                                    <td>JUL</td>
                                    <td>Is 'Method' relevant to Shakespeare performance?</td>
                                </tr>
                                <tr>
                                    <td>JUN</td>
                                    <td>The curse of exclamation marks!</td>
                                </tr>
                                <tr>
                                    <td>MAY</td>
                                    <td>Shakespeare's trail of breadcrumbs</td>
                                </tr>
                                <tr>
                                    <td>APR</td>
                                    <td>Double entendres – how far should one illustrate?</td>
                                </tr>
                                <tr>
                                    <td>MAR</td>
                                    <td>A performance text and a literary text are not the same </td>
                                </tr>                                       
                            </tbody>
                        </table>            
                    </div> 
                </div>
                <div class="col-lg-4">
                    <div class="col-lg-12 pipe-wall">
                        <h2 class="section-heading ">Your Purchase History</h2>
                        <p class="lead section-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>

                        <p>ePlays</p>
                        <ul id="" class="">
                            <li>Hamlet </li>
                            <li>Henry IV, Pt 1</li>
                            <li>Henry IV, Pt 2</li>
                        </ul>

                        <p>PPP</p>
                        <ul id="" class="">
                            <li>Hamlet </li>
                            <li>Henry IV, Pt 1</li>
                            <li>Henry IV, Pt 2</li>
                        </ul>

                        <p>Audio Speeches</p>
                        <ul id="" class="">
                            <li>Hamlet </li>
                            <li>Henry IV, Pt 1</li>
                            <li>Henry IV, Pt 2</li>
                        </ul>            

                        <p>Theatre Scripts</p>
                        <ul id="" class="">
                            <li>Hamlet </li>
                            <li>Henry IV, Pt 1</li>
                            <li>Henry IV, Pt 2</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-lg-12 pipe-wall">
                        <h2 class="section-heading ">Your Saved Favourites</h2>
                        <p class="lead section-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>

                        <p>ePlays</p>
                        <ul id="" class="">
                            <li>Hamlet </li>
                            <li>Henry IV, Pt 1</li>
                            <li>Henry IV, Pt 2</li>
                        </ul>

                        <p>PPP</p>
                        <ul id="" class="">
                            <li>Hamlet </li>
                            <li>Henry IV, Pt 1</li>
                            <li>Henry IV, Pt 2</li>
                        </ul>

                        <p>Audio Speeches</p>
                        <ul id="" class="">
                            <li>Hamlet </li>
                            <li>Henry IV, Pt 1</li>
                            <li>Henry IV, Pt 2</li>
                        </ul>            

                        <p>Theatre Scripts</p>
                        <ul id="" class="">
                            <li>Hamlet </li>
                            <li>Henry IV, Pt 1</li>
                            <li>Henry IV, Pt 2</li>
                        </ul>                    
                    </div>
                </div>
            </div>
        </div>

    <!-- Fixed Height Image Aside -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->
    <!-- <aside class="image-bg-fixed-height"></aside> -->

    <!-- Content Section -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="section-heading">Other Stuff here</h1>
                    <p class="lead section-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->


<?php
    require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/account/admin-footer.php" : $_SERVER['DOCUMENT_ROOT'] . "/account/admin-footer.php");
?>