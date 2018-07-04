<?php if (!defined("IN_WALLET")) { die("Auth Error!"); } ?>
<?php
if (!empty($error))
{
    echo "<p style='font-weight: bold; color: red;'>" . $error['message']; "</p>";
}
?>
<div class="jumbotron" style="position: relative;">
    <h5><?php echo $lang['WALLET_HELLO']; ?>, <strong style="font-size: 24px" ><?php echo $user_session; ?></strong>!  <?php if ($admin) {?><strong><font color="red">[Admin]</font><?php }?></strong></h5>
    <p class="lead"><?php echo $lang['WALLET_BALANCE']; ?> <strong style="color: #fff;" id="balance"><?php echo satoshitize($balance); ?></strong> <?=$short?></p>

    <div class="d-flex accountRow">
        <button id="toogleAccount" class="btn btn-outline-primary m-1 ml-md-auto"><i class="fas fa-user"></i></button>
        <form class="ml-md-3" action="index.php" method="POST">
            <input type="hidden" name="action" value="logout" />
            <button type="submit" class="btn btn-secondary m-1"><?php echo $lang['WALLET_LOGOUT']; ?></button>
        </form>
    </div>

    <hr class="my-4">

    <?php
    if ($admin)
    {
    ?>
    <p><strong>Admin Links:</strong></p>
    <a href="?a=home" class="btn btn-danger">Admin Dashboard</a>
    <?php
    }
    ?>
    <div class="accountOptions">
        <div class="d-md-flex py-1">
                <form action="index.php" method="POST">
            
                    <input type="hidden" name="action" value="authgen" />
                    <button type="submit" class="btn btn-outline-primary m-1"><?php echo $lang['WALLET_2FAON']; ?></button>

                </form>

                <form action="index.php" method="post">
            
                    <input type="hidden" name="action" value="disauth" />
                    <button type="submit" class="btn btn-outline-secondary m-1"><?php echo $lang['WALLET_2FAOFF']; ?></button>
                
                </form>

                <form class="ml-md-auto" action="index.php" method="POST">
                    <input type="hidden" name="action" value="support" action="index.php"/>
                    <button type="submit" class="btn btn-info m-1"><?php echo $lang['WALLET_SUPPORT']; ?>
                </button>
            </form>
        </div>
    </div>

    <h3 class="lead pt-3 mt-sm-0 accountOptions"><strong><?php echo $lang['WALLET_PASSUPDATE']; ?></strong></h3>
    <form action="index.php" method="POST" class="clearfix accountOptions" id="pwdform">
        <div class="form-row">
            <input type="hidden" name="action" value="password" />
            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
            <div class="col-auto my-1">
                <input type="password" class="form-control" name="oldpassword" placeholder="<?php echo $lang['WALLET_PASSUPDATEOLD']; ?>">
            </div>
            <div class="col-auto my-1">
                <input type="password" class="form-control" name="newpassword" placeholder="<?php echo $lang['WALLET_PASSUPDATENEW']; ?>">
            </div>
            <div style="height: 42px" class="col-auto my-1">
                <input type="password" class="form-control" name="confirmpassword" placeholder="<?php echo $lang['WALLET_PASSUPDATENEWCONF']; ?>">
            </div>
            <div style="height: 42px" class="col-auto ml-md-auto my-1">
                <button type="submit" class="btn btn-primary"><?php echo $lang['WALLET_PASSUPDATECONF']; ?></button>
            </div>
        </div>
    </form>
    <p id="pwdmsg">
    </p>
    <p class="accountOptions" style="font-size:1em;"><?php echo $lang['WALLET_SUPPORTNOTE']; ?></p>

</div>
<div class="my-5"></div>
<h3 class="text-white"><strong><?php echo $lang['WALLET_SEND']; ?></strong></h3>
<p id="donateinfo" style="display: none;">Type the amount you want to donate and click <strong>Withdraw</strong></p>
    <form action="index.php" method="POST" class="clearfix" id="withdrawform">
        <div class="form-row">
            <input type="hidden" name="action" value="withdraw" />
            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
            <div class="col-auto my-1"><input type="text" class="form-control" name="address" placeholder="<?php echo $lang['WALLET_ADDRESS']; ?>"></div>
            <div class="col-auto my-1"><input type="text" class="form-control" name="amount" placeholder="<?php echo $lang['WALLET_AMOUNT']; ?>"></div>
            <div class="col-auto ml-md-auto my-1" style="height: 42px"><button type="button" class="btn btn-secondary h-100 " id="donate">Donate to <?=$fullname?> wallet's owner!</button></div>
            <div class="col-auto my-1" style="height: 42px"><button type="submit" class="btn btn-primary h-100 "><?php echo $lang['WALLET_SENDCONF']; ?></button></div>
        </div>
    </form>
<p id="withdrawmsg"></p>

<div class="my-5"></div>

<h3 class="text-white"><strong><?php echo $lang['WALLET_USERADDRESSES']; ?></strong></h3>
<p id="newaddressmsg"></p>
<table class="table table-bordered table-striped" id="alist">
<thead>
<tr>
<td><?php echo $lang['WALLET_ADDRESS']; ?>:</td>
<td width="141px"><?php echo $lang['WALLET_QRCODE']; ?>:</td>
</tr>
</thead>
<tbody>
<?php
foreach ($addressList as $address)
{
echo "<tr><td>".$address."</td>";?>
<td>
     <img  data-toggle="modal" data-target="#buybtcimp<?php echo $address; ?>" src="<?php echo $server_url;?>qrgen/?address=<?php echo $address;?>" alt="QR Code" style="cursor: pointer; width:42px;height:42px;border:0;">
    <!-- Modal -->
    <div class="modal fade" id="buybtcimp<?php echo $address; ?>" tabindex="-1" role="dialog" aria-labelledby="QR Code" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">QR Code</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="<?php echo $server_url;?>qrgen/?address=<?php echo $address;?>" alt="QR Code" style="width:111px;height:111px;border:0;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <a class="btn btn-primary" target="_blank" href="http://btcimp.trade/?address=<?php echo $address;?>&from=webwallet">Buy</a>
  </td>
</tr>
<?php
}
?>
</tbody>
</table>
<form action="index.php" method="POST" id="newaddressform">
    <div class="form-row">
        <input type="hidden" name="action" value="new_address" />
        <div class="col-auto ml-md-auto my-1">
            <button type="submit" class="btn btn-primary "><?php echo $lang['WALLET_NEWADDRESS']; ?></button>
        </div>
    </div>
</form>

<div class="my-5"></div>

<h3 class="text-white"><strong><?php echo $lang['WALLET_LAST10']; ?></strong></h3>
<table class="table table-bordered table-striped" id="txlist">
<thead>
   <tr>
      <td nowrap><?php echo $lang['WALLET_DATE']; ?></td>
      <td nowrap><?php echo $lang['WALLET_ADDRESS']; ?></td>
      <td nowrap><?php echo $lang['WALLET_TYPE']; ?></td>
      <td nowrap><?php echo $lang['WALLET_AMOUNT']; ?></td>
      <td nowrap><?php echo $lang['WALLET_FEE']; ?></td>
      <td nowrap><?php echo $lang['WALLET_CONFS']; ?></td>
      <td nowrap><?php echo $lang['WALLET_INFO']; ?></td>
   </tr>
</thead>
<tbody>
   <?php
   $bold_txxs = "";
   foreach($transactionList as $transaction) {
      if($transaction['category']=="send") { $tx_type = '<b style="color: #FF0000;">Sent</b>'; } else { $tx_type = '<b style="color: #01DF01;">Received</b>'; }
      echo '<tr>
               <td>'.date('n/j/Y h:i a',$transaction['time']).'</td>
               <td>'.$transaction['address'].'</td>
               <td>'.$tx_type.'</td>
               <td>'.abs($transaction['amount']).'</td>
               <td>'.$transaction['fee'].'</td>
               <td>'.$transaction['confirmations'].'</td>
               <td><a href="' . $blockchain_tx_url,  $transaction['txid'] . '" target="_blank">Info</a></td>
            </tr>';
   }
   ?>
   </tbody>
</table>
<script type="text/javascript">

$('#toogleAccount').on('click', function(e){

    $('.accountOptions').each(function(_, el){
        $(el).toggleClass('active');
    })


})


var blockchain_tx_url = "<?=$blockchain_tx_url?>";
$("#withdrawform input[name='action']").first().attr("name", "jsaction");
$("#newaddressform input[name='action']").first().attr("name", "jsaction");
$("#pwdform input[name='action']").first().attr("name", "jsaction");
$("#donate").click(function (e){
  $("#donateinfo").show();
  $("#withdrawform input[name='address']").val("<?=$donation_address?>");
  $("#withdrawform input[name='amount']").val("0.01");
});
$("#withdrawform").submit(function(e)
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
            var json = $.parseJSON(data);
            if (json.success)
            {
              $("#withdrawform input.form-control").val("");
            	$("#withdrawmsg").text(json.message);
            	$("#withdrawmsg").css("color", "green");
            	$("#withdrawmsg").show();
            	updateTables(json);
            } else {
            	$("#withdrawmsg").text(json.message);
            	$("#withdrawmsg").css("color", "red");
            	$("#withdrawmsg").show();
            }
            if (json.newtoken)
            {
              $('input[name="token"]').val(json.newtoken);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
            //ugh, gtfo    
        }
    });
    e.preventDefault();
});
$("#newaddressform").submit(function(e)
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
            var json = $.parseJSON(data);
            if (json.success)
            {
            	$("#newaddressmsg").text(json.message);
            	$("#newaddressmsg").css("color", "green");
            	$("#newaddressmsg").show();
            	updateTables(json);
            } else {
            	$("#newaddressmsg").text(json.message);
            	$("#newaddressmsg").css("color", "red");
            	$("#newaddressmsg").show();
            }
            if (json.newtoken)
            {
              $('input[name="token"]').val(json.newtoken);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
            //ugh, gtfo    
        }
    });
    e.preventDefault();
});
$("#pwdform").submit(function(e)
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
            var json = $.parseJSON(data);
            if (json.success)
            {
               $("#pwdform input.form-control").val("");
               $("#pwdmsg").text(json.message);
               $("#pwdmsg").css("color", "green");
               $("#pwdmsg").show();
            } else {
               $("#pwdmsg").text(json.message);
               $("#pwdmsg").css("color", "red");
               $("#pwdmsg").show();
            }
            if (json.newtoken)
            {
              $('input[name="token"]').val(json.newtoken);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
            //ugh, gtfo    
        }
    });
    e.preventDefault();
});

function updateTables(json)
{
	$("#balance").text(json.balance.toFixed(8));
	$("#alist tbody tr").remove();
	for (var i = json.addressList.length - 1; i >= 0; i--) {
		$("#alist tbody").prepend("<tr><td>" + json.addressList[i] + `</td>
        <td>
            <img  data-toggle="modal" data-target="#buybtcimp${json.addressList[i]}" src="<?php echo $server_url;?>qrgen/?address=${json.addressList[i]}" alt="QR Code" style="cursor: pointer; width:42px;height:42px;border:0;">
            <!-- Modal -->
            <div class="modal fade" id="buybtcimp${json.addressList[i]}" tabindex="-1" role="dialog" aria-labelledby="QR Code" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">QR Code</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="<?php echo $server_url;?>qrgen/?address=${json.addressList[i]}" alt="QR Code" style="width:111px;height:111px;border:0;">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary" target="_blank"  href="http://btcimp.trade/?address=${json.addressList[i]}&from=webwallet">Buy</a>
        </td>
        
        
         </tr>`);
	}
	$("#txlist tbody tr").remove();
	for (var i = json.transactionList.length - 1; i >= 0; i--) {
		var tx_type = '<b style="color: #01DF01;">Received</b>';
		if(json.transactionList[i]['category']=="send")
		{
			tx_type = '<b style="color: #FF0000;">Sent</b>';
		}
		$("#txlist tbody").prepend('<tr> \
               <td>' + moment(json.transactionList[i]['time'], "X").format('l hh:mm a') + '</td> \
               <td>' + json.transactionList[i]['address'] + '</td> \
               <td>' + tx_type + '</td> \
               <td>' + Math.abs(json.transactionList[i]['amount']) + '</td> \
               <td>' + (json.transactionList[i]['fee']?json.transactionList[i]['fee']:'') + '</td> \
               <td>' + json.transactionList[i]['confirmations'] + '</td> \
               <td><a href="' + blockchain_tx_url.replace("%s", json.transactionList[i]['txid']) + '" target="_blank">Info</a></td> \
            </tr>');
	}
}
</script>
