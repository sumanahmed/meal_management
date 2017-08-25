<?php 
 include('inc/header.php'); 
 include('lib/User.php');
 include('lib/Meal.php');
 Session::checkSession();
$user = new User();
$meal = new Meal();
 ?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h2 class="text-center">Money Collection History</h2>		
	</div>

	<div class="panel-body">
		<form action="" method="post">
			<table class="table table-bordered">
				<tr>
					<th>Name</th>
					<th>One</th>
					<th>Two</th>
					<th>Three</th>
					<th>Four</th>
					<th>Total Amount</th>
				</tr>
				<tr>
					<td><input type="text" name="name" value="Suman Ahmed" id="" readonly="readonly"></td>
					<td><input type="number" name="amount_one" value="" id=""></td>
					<td><input type="number" name="amount_two" value="" id=""></td>
					<td><input type="number" name="amount_three" value="" id=""></td>
					<td><input type="number" name="amount_four" value="" id=""></td>
					<td><input type="text" name="member_total_amount" value="5000" id="" readonly="readonly"></td>
				</tr>
					
				<tr>
					<td colspan="2"><input class="btn btn-success pull-right" type="submit" name="submit" value="Update"></td>
					<td colspan="3" class="text-center"><b>Total Money Collection:</b></td>
					<td>5000 Tk</td>
				</tr>		
					
			</table>
		</form>
	</div>
</div>
<div class="panel panel-default">

	<div class="panel-heading">
		<h2 class="text-center">Meal History</h2>
	</div>


	<div class="panel-body">
		<table class="table table-bordered">
		<tr>
			<th>Day</th>
			<th>suman</th>
			<th>monir</th>
			<th>bidhan</th>
			<th>perosn</th>
			<th>perosn</th>
			<th>perosn</th>			
		</tr>
	
		<tr>
			<td>01</td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
		</tr>
		<tr>
			<td>02</td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
		</tr>
		<tr>
			<td>03</td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
		</tr>
		<tr>
			<td>04</td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
		</tr>
		<tr>
			<td>05</td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
			<td><input type="number" name="" value="" id=""></td>
		</tr>
		<tr>
		<td colspan="5">Total Meal in <?php echo date('F Y'); ?></td>
			<td colspan="2"><input class="btn btn-success pull-right" type="submit" name="submit" value="Update"></td>
		</tr>
			
		</table>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<h2 class="text-center">Bazar History</h2>
	</div>


	<div class="panel-body">
		<table class="table table-bordered">
		<tr>
			<th>Day</th>
			<th>Name</th>
			<th>Amount One</th>
			<th>Amount Two</th>
			<th>Total</th>			
		</tr>
	
		<tr>
			<td>01</td>
			<td><input type="text" name="" value="Suman Ahmed" id=""></td>
			<td><input type="number" name="" value="300" id=""></td>
			<td><input type="number" name="" value="200" id=""></td>
			<td><input type="number" name="" value="500" id=""></td>
		</tr>
		<tr>
			<td>02</td>
			<td><input type="text" name="" value="Monir" id=""></td>
			<td><input type="number" name="" value="300" id=""></td>
			<td><input type="number" name="" value="200" id=""></td>
			<td><input type="number" name="" value="500" id=""></td>
		</tr>
		<tr>			
			<td colspan="2"><input class="btn btn-success pull-right" type="submit" name="submit" value="Update"></td>
			<td colspan="2" class="text-center">Total Bazar Amount : </td>
			<td>3000</td>
		</tr>			
		</table>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<h2 class="text-center">Specific Member History</h2>
	</div>


	<div class="panel-body">
		<form action="" method="POST">			
			<table class="table table-bordered text-center">
				<tr>
					<td>Member Name:</td>					
					<td>
						<select name="0" id="" name="name">
							<option value="suman">Suman</option>
							<option value="jabed">jabed</option>
							<option value="monir">monir</option>
						</select>
					</td>
						<td colspan="2"><input class="btn btn-success pull-right" type="submit" name="submit" value="View"></td>
				</tr>			
			</table>
	
			<table class="table table-bordered ">
				<tr>
					<th>Name</th>
					<th>Total Meal</th>
					<th>Total Pay</th>
					<th>Meal Rate</th>			
					<th>Due/Cash</th>			
					<th>Staus</th>			
				</tr>
			
				<tr>
					<td>Suman Ahemd</td>
					<td>30</td>
					<td>2300</td>
					<td>44.25</td>
					<td>-500</td>
					<td>
						<a onclick="return confirm('Are you sure paid full amount ?');" href="">Paid</a> |
						<a href="">Unpaid</a>
					</td>
				</tr>			
			</table>
		</form>
		
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<h2 class="text-center">Final Report of Meal in <?php echo date('F y'); ?></h2>
	</div>

	<div class="panel-body">
		<form action="" method="POST">			
			<table class="table table-bordered ">
				<tr>
					<th>Meal Rate</th>
					<th>Total Meal</th>
					<th>Total Payment</th>
					<th>Total Bazar</th>	
					<th>Cash Amount</th>	
				</tr>
			
				<tr>
					<td>44.25 Tk</td>
					<td>350</td>
					<td>15000 Tk</td>
					<td>14500 Tk</td>
					<td>500 Tk</td>
				</tr>			
			</table>
		</form>
		
	</div>
</div>

</div>
<?php include('inc/footer.php'); ?>