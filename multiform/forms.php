<?php 
/*
Template Name: Custom form 
*/
get_header();
?>
<div class="progressbar">
    <div class="progress" id='progress'></div>
    <div class="progress-step progress-step-active" id='step1' data-title="intro"></div>
    <div class="progress-step" data-title="address" id='step2'></div>
    <div class="progress-step" data-title="subject" id='step3'></div>

</div>
    <h1> fill forms all step</h1>
        <form id='form1' method='post'>
            <div class="form-step first_form">
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" name='fname' class="form-control"  id="fname" placeholder="Enter First Name" required>
                    <b class="form-text text-danger" id="err_name"></b>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="Text" name='lname' class="form-control" id="lname" placeholder="Enter Last Name" required>
                    <b class="form-text text-danger" id="err_lname"></b>

                </div>
                <a href='#' class="btn btn-primary" id='next1'>Next</a>
            </div>

            <!-- form-2 -->
            <div class="form-step second_form">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name='address' class="form-control" id="address" placeholder="Enter Address " required>
                    <b class="form-text text-danger" id="err_address"></b>

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mobile</label>
                    <input type="Text" name='number' class="form-control" id="mobile" placeholder="Enter Mobile Number" required>
                    <b class="form-text text-danger" id="err_mobile"></b>

                </div>
                <a href='#' class="btn btn-primary" id='privious2'>Privious</a>
                <a href='#' class="btn btn-primary" id='next2'>Next</a>
            </div>
            <!-- form-3 -->
            <div class="form-step third_form">
                <div class="form-group">
                    <label for="exampleInputEmail1">Subject</label>
                    <input type="text" name='subject' class="form-control" id="subject" placeholder="Enter Address " required>
                    <b class="form-text text-danger" id="err_subject"></b>

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Query</label>
                    <input type="Text" name='query' class="form-control" id="query" placeholder="Enter Mobile Number" required>
                    <b class="form-text text-danger" id="err_query"></b>

                </div>
                <a href='#' class="btn btn-primary" id='privious3'>Privious</a>
                <input type="hidden"  name="action" value="insert_data">

                <button id='submit' name='submit' type='submit' class="btn btn-primary submit_data">Submit</button>
            </div>
        </form>

<?php

get_footer();