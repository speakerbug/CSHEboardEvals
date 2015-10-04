<html>
    
<?php $isActive = false; ?>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">

    <link rel="icon" type="icon" href="cshfavicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
    <meta name="HandheldFriendly" content="true">
    <title>CSH | Eboard Evaluation</title>
    <link href="formCss.css" rel="stylesheet" type="text/css">
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery 2.1.3 -->
    <script src="//friendlyu.com/profile/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- CSH Bootstrap Theme -->
	<link href="admin/css/members.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="EboardEvalsTheme.css">
    <style type="text/css">
        .form-label-left {
            width: 150px !important;
        }
        
        .form-line {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        
        .form-label-right {
            width: 150px !important;
        }
        
        body,
        html {
            margin: 0;
            padding: 0;
            background: url(background.png);
        }
        
        .form-all {
            margin: 0px auto;
            padding-top: 0px;
            width: 690px;
            background: transparent;
            color: #333 !important;
            font-family: 'Rockwell';
            font-size: 12px;
        }
    </style>


</head>

<body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="admin/images/csh_logo_white.svg" alt="CSH" class="logo"> <span>Eboard Evals</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
		  <ul class="nav navbar-nav navbar-right">
		    <li><a href="https://whatif.csh.rit.edu" target="_blank"><span class="glyphicon glyphicon-new-window"></span> What if CSH...</a></li>
		  </ul>  
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    
    <div class="container">
    <BR><BR><BR>
    <form validate class="jotform-form" action="EboardEvals.php" method="POST" id="EboardEvalsForm" name="EboardEvalsForm">
        <div class="form-all">
            <ul class="form-section page-section">
                <li id="cid_7" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group">
                        <div class="header-text httal htvam">
                            <h1 id="header_7" class="form-header">
              Eboard Evaluation
            </h1>
                            <div id="subHeader_7" class="form-subHeader">
                                To evaluate an Eboard member, please fill out the form below.
                            </div>
                        </div>
                    </div>
                </li>
                
                <?php if ($isActive) { ?>
                <li class="form-line" data-type="control_textbox" id="id_1">
                    <label class="form-label form-label-left form-label-auto" id="label_1" for="input_1"> Name (optional): </label>
                    <div id="cid_1" class="form-input jf-required">
                        <input type="text" class="form-control form-textbox" data-type="input-textbox" id="input_1" name="name" size="20" value="">
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_3">
                    <label class="form-label form-label-left form-label-auto" id="label_3" for="input_3"> Eboard Position (Required): </label>
                    <div  required id="cid_3" class="form-input jf-required">
                        <select  id="cid_3" required=required class="form-line form-control" name="position" validate>
                            <option disabled value="select one">Select One</option>
                            <option value="Eboard In General">Eboard In General</option>
                            <option value="Chairman">Chairman</option>
                            <option value="Evals">Evals</option>
                            <option value="Financial">Financial</option>
                            <option value="History">History</option>
                            <option value="Imps">Imps</option>
                            <option value="OpComm">OpComm</option>
                            <option value="R&D">R&amp;D</option>
                            <option value="Social">Social</option>
                        </select>
                    </div>
                </li>
                <li class="form-line" data-type="control_matrix" id="id_4">
                    <label class="form-label form-label-top" id="label_4" for="input_4"> Please choose the best answer for each question. </label>
                    <div id="cid_4" class="form-input-wide jf-required">
                        <table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table table">
                            <tbody>
                                <tr>
                                    <th style="border:none">&nbsp;

                                    </th>
                                    <th class="form-matrix-column-headers form-matrix-column_0">
                                        Strongly Agree
                                    </th>
                                    <th class="form-matrix-column-headers form-matrix-column_1">
                                        Agree
                                    </th>
                                    <th class="form-matrix-column-headers form-matrix-column_2">
                                        Neutral
                                    </th>
                                    <th class="form-matrix-column-headers form-matrix-column_3">
                                        Disagree
                                    </th>
                                    <th class="form-matrix-column-headers form-matrix-column_4">
                                        Strongly Disagree
                                    </th>
                                </tr>
                                <tr>
                                    <th align="left" class="form-matrix-row-headers">
                                        Treats members with respect
                                    </th>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_0_0" class="form-radio" type="radio" name="q1" value="4">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_0_1" class="form-radio" type="radio" name="q1" value="3">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_0_2" class="form-radio" type="radio" name="q1" value="2">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_0_3" class="form-radio" type="radio" name="q1" value="1">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_0_4" class="form-radio" type="radio" name="q1" value="0">
                                    </td>
                                </tr>
                                <tr>
                                    <th align="left" class="form-matrix-row-headers">
                                        Makes members feel free to ask questions
                                    </th>
                                     <td align="center" class="form-matrix-values">
                                        <input id="input_4_0_5" class="form-radio" type="radio" name="q2" value="4">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_0_6" class="form-radio" type="radio" name="q2" value="3">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_0_7" class="form-radio" type="radio" name="q2" value="2">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_0_8" class="form-radio" type="radio" name="q2" value="1">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_0_9" class="form-radio" type="radio" name="q2" value="0">
                                    </td>
                                </tr>
                                <tr>
                                    <th align="left" class="form-matrix-row-headers">
                                        Is capable of answering questions
                                    </th>
                                     <td align="center" class="form-matrix-values">
                                        <input id="input_4_1_0" class="form-radio" type="radio" name="q3" value="4">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_1_1" class="form-radio" type="radio" name="q3" value="3">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_1_2" class="form-radio" type="radio" name="q3" value="2">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_1_3" class="form-radio" type="radio" name="q3" value="1">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_1_4" class="form-radio" type="radio" name="q3" value="0">
                                    </td>
                                </tr>
                                <tr>
                                    <th align="left" class="form-matrix-row-headers">
                                        Communicates clearly
                                    </th>
                                     <td align="center" class="form-matrix-values">
                                        <input id="input_4_1_5" class="form-radio" type="radio" name="q4" value="4">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_1_6" class="form-radio" type="radio" name="q4" value="3">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_1_7" class="form-radio" type="radio" name="q4" value="2">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_1_8" class="form-radio" type="radio" name="q4" value="1">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_1_9" class="form-radio" type="radio" name="q4" value="0">
                                    </td>
                                </tr>
                                <tr>

                                    <th align="left" class="form-matrix-row-headers">
                                        Provided constructive feedback on major project ideas
                                    </th>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_2_0" class="form-radio" type="radio" name="q5" value="4">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_2_1" class="form-radio" type="radio" name="q5" value="3">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_2_2" class="form-radio" type="radio" name="q5" value="2">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_2_3" class="form-radio" type="radio" name="q5" value="1">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_2_4" class="form-radio" type="radio" name="q5" value="0">
                                    </td>
                                </tr>
                                <tr>
                                    <th align="left" class="form-matrix-row-headers">
                                        Kept members informed about their activitites and progress related to their position
                                    </th>
                                     <td align="center" class="form-matrix-values">
                                        <input id="input_4_2_5" class="form-radio" type="radio" name="q6" value="4">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_2_6" class="form-radio" type="radio" name="q6" value="3">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_2_7" class="form-radio" type="radio" name="q6" value="2">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_2_8" class="form-radio" type="radio" name="q6" value="1">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_2_9" class="form-radio" type="radio" name="q6" value="0">
                                    </td>
                                </tr>
                                <tr>
                                    <th align="left" class="form-matrix-row-headers">
                                        Is available outside of commitee meetings
                                    </th>
                                     <td align="center" class="form-matrix-values">
                                        <input id="input_4_3_0" class="form-radio" type="radio" name="q7" value="4">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_3_1" class="form-radio" type="radio" name="q7" value="3">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_3_2" class="form-radio" type="radio" name="q7" value="2">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_3_3" class="form-radio" type="radio" name="q7" value="1">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_3_4" class="form-radio" type="radio" name="q7" value="0">
                                    </td>
                                </tr>
                                <tr>
                                    <th align="left" class="form-matrix-row-headers">
                                        Follows constitution rules regarding their position
                                    </th>
                                     <td align="center" class="form-matrix-values">
                                        <input id="input_4_3_5" class="form-radio" type="radio" name="q8" value="4">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_3_6" class="form-radio" type="radio" name="q8" value="3">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_3_7" class="form-radio" type="radio" name="q8" value="2">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_3_8" class="form-radio" type="radio" name="q8" value="1">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_3_9" class="form-radio" type="radio" name="q8" value="0">
                                    </td>
                                </tr>
                                <tr>
                                    <th align="left" class="form-matrix-row-headers">
                                        Utilizes their budget well
                                    </th>
                                     <td align="center" class="form-matrix-values">
                                        <input id="input_4_4_0" class="form-radio" type="radio" name="q9" value="4">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_4_1" class="form-radio" type="radio" name="q9" value="3">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_4_2" class="form-radio" type="radio" name="q9" value="2">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_4_3" class="form-radio" type="radio" name="q9" value="1">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_4_4" class="form-radio" type="radio" name="q9" value="0">
                                    </td>
                                </tr>
                                <tr>
                                    <th align="left" class="form-matrix-row-headers">
                                        Is enthusiastic about their position
                                    </th>
                                     <td align="center" class="form-matrix-values">
                                        <input id="input_4_4_5" class="form-radio" type="radio" name="q10" value="4">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_4_6" class="form-radio" type="radio" name="q10" value="3">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_4_7" class="form-radio" type="radio" name="q10" value="2">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_4_8" class="form-radio" type="radio" name="q10" value="1">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_4_9" class="form-radio" type="radio" name="q10" value="0">
                                    </td>
                                </tr>
                                <tr>
                                    <th align="left" class="form-matrix-row-headers">
                                        Completed the objectives/goals they set/were given to them
                                    </th>
                                     <td align="center" class="form-matrix-values">
                                        <input id="input_4_5_0" class="form-radio" type="radio" name="q11" value="4">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_5_1" class="form-radio" type="radio" name="q11" value="3">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_5_2" class="form-radio" type="radio" name="q11" value="2">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_5_3" class="form-radio" type="radio" name="q11" value="1">
                                    </td>
                                    <td align="center" class="form-matrix-values">
                                        <input id="input_4_5_4" class="form-radio" type="radio" name="q11" value="0">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </li>

                <li class="form-line" data-type="control_textarea" id="id_5">
                    <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5"> What you like: </label>
                    <div id="cid_5" class="form-input">
                        <textarea id="input_5" class="form-textarea form-control" name="like" cols="40" rows="6"></textarea>
                    </div>
                </li>

                <li class="form-line" data-type="control_textarea" id="id_5">
                    <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5"> What you dislike: </label>
                    <div id="cid_5" class="form-input">
                        <textarea id="input_5" class="form-textarea form-control" name="dislike" cols="40" rows="6"></textarea>
                    </div>
                </li>

                <li class="form-line" data-type="control_textarea" id="id_5">
                    <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5"> Other comments: </label>
                    <div id="cid_5" class="form-input jf-required">
                        <textarea id="input_5" class="form-textarea form-control" name="comment" cols="40" rows="6"></textarea>
                    </div>
                </li>

                <li class="form-line" data-type="control_button" id="id_2">
                    <div id="cid_2" class="form-input-wide">
                        <div style="text-align:left" class="form-buttons-wrapper">
                            <button id="submit" type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </li>

            </ul>
        </div>


    </form>
        
        <?php }  else { 
    
        echo "<BR><BR>EBoard evals are closed.<BR><BR><BR>";
    
} ?>
        
        <footer>
            <p class="pull-left">CSH Eboard Evals created by <a href="https://profiles.csh.rit.edu/user/Harsh">Harsh Joshi</a>, <a href="https://profiles.csh.rit.edu/user/henry">Henry Saniuk</a> &amp; <a href="https://profiles.csh.rit.edu/user/hudson">Brandon Hudson</a></p><p class="pull-right"><img src="admin/images/github.png" id="github"> <a href="https://github.com/speakerbug/CSHEboardEvals" target="_blank">GitHub</a></p>
      </footer>
        
        </div>

    <script>
    
$("#EboardEvalsForm").submit(function(e)
{

    var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(data, textStatus, jqXHR) 
        {
            $('#EboardEvalsForm').trigger("reset");
            alert("Your evaluation has been submitted succesfully!");
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
            //if fails
            alert("Please make sure you enter in either a comment you like or dislike.");
        }
    });
    e.preventDefault(); //STOP default action
    e.unbind(); //unbind. to stop multiple form submit.
});
    
    </script>
        
</body>

</html>