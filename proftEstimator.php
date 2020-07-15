<?php
//  /nonMvcScripts/proftEstimator.php
//error_reporting(0);
//initClientBudget.php
//var_dump($_POST);
//include 'connect_to_lis.php';

//$verbose = 0;
error_reporting(0);

if (empty($_POST)) {
	/* 1 */ $_POST['category'] = "";  //Category
	/* 2 */ $_POST['collaborator1_sub_categories_in_category'] = "";  //  Collaborator1 Sub Categories in Category
	/* 3 */ $_POST['featured_sub_category'] = "";  //  Collaborator1 Sub Categories in Category
	/* 4 */ $_POST['sub_category_share_of_gross'] = "";  //  Sub Category Share of Gross
	/* 5 */ $_POST['number_skus_in_featured_sub_category'] = "";  //  Number SKUs in Featured Sub Category
	/* 6 */ $_POST['target_market_for_featured_sub_category'] = "";  //  Target Market for Featured Sub Category
	/* 7 */ $_POST['households_in_featured_sub_category_segment'] = "";  //  Households in Featured Sub Category Segment
	
	/* 8 */ $_POST['households_in_featured_sub_category_segment_in_radius'] = "";  //  Households in Featured Sub Category Segment in Radius
	/* 9 */ $_POST['average_new_buyer_retention_in_years'] = "";  //  Average New Buyer Retention in Years
	/* 10 */ $_POST['average_retention_of_existing_buyers_in_years'] = "";  //  Average Retention of Existing Buyers in Years
	/* 11 */ $_POST['estimated_featured_sub_category_annual_new_buyer_household_response_rate'] = "";  //  Estimated Featured Sub Category Annual New Buyer Household Response Rate
	/* 12 */ $_POST['estimated_touches_needed_per_household_per_response'] = "";  //  Estimated Touches Needed per Household per Response
	/* 13 */ $_POST['estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment'] = "";  //  Estimated Current Market Share for Collaborator1 in Featured Sub Category Segment
	/* 14 */ $_POST['current_collaborator1_competitors_in_featured_sub_category_segment'] = "";  //  Current Collaborator1 Competitors in Featured Sub Category Segment
	/* 15 */ $_POST['minutes_needed_for_knock'] = "";  //  Minutes needed for knock
	/* 16 */ $_POST['minutes_needed_for_talk'] = ""; //  Minutes needed for talk
	
	/* 17 */ $_POST['collaborator1_current_featured_sub_category_new_buyer_production_per_week'] = "";  //  Collaborator1 Current Featured Sub Category New Buyer Production Per Week
	/* 18 */ $_POST['collaborator1_current_data_source_for_featured_sub_category_new_buyer_production_per_week'] = '';  //  Collaborator1 Current Data Source for Featured Sub Category New Buyer Production Per Week
	/* 19 */ $_POST['featured_sub_category_user_rate'] = "";  //  Featured Sub Category User Rate
	/* 20 */ $_POST['collaborator1_current_data_source_for_featured_sub_category_user_rate'] = '';  //  Collaborator1 Current Data Source for Featured Sub Category User Rate
	/* 21 */ //$_POST['collaborator2_current_sub_category_gross_per_week'] = "";  //  Collaborator2 Current Sub Category Gross per Week

	/* 22 */ //$_POST['collaborator2_current_sub_gross_data_source'] = ""; //  Collaborator2 Current Sub Category Gross Data Source
	/* 23 */ //$_POST['collaborator2_current_new_buyer_in_sub_category_production_per_week'] = "";  //  Collaborator2 Current New Buyer in Sub Category Production Per Week
	/* 24 */ //$_POST['collaborator2_current_new_buyer_in_sub_category_production_per_week_data_source'] = '';  //  Collaborator2 Current New Buyer in Sub Category Production Per Week Data Source
	/* 25 */ //$_POST['collaborator2_current_featured_sub_category_user_rate'] = "";  //  Collaborator2 Current Featured Sub Category User Rate
	/* 26 */// $_POST['collaborator2_current_data_source_for_featured_sub_category_user_rate'] = '';  //  Collaborator2 Current Data Source for Featured Sub Category User Rate

	
	//$_POST['new_customer_goal'] = "";  //  New Customer Goal
	/* 27 */ $_POST['average_transaction_for_featured_sub_category'] = "";  //  Average Transaction for Featured Sub Category
	/* 28 */ $_POST['average_transactions_for_featured_sub_category_per_buyer_per_year'] = ""; //  Average Transactions for Featured Sub Category per Buyer per Year
	/* 29 */ $_POST['cost_of_goods_sold_for_featured_sub_category_as_percent_of_gross'] = "";  //  Cost of Goods Sold for Featured Sub Category as Percent of Gross
	//$_POST['all_other_variable_costs_as_percent_of_gross'] = "";  //  All Other Variable Costs as Percent of Gross 

	//$_POST['note_on_all_other_variable_costs_as_percent_of_gross'] = "";  //  Note on All Other Variable Costs_as_percent_of_gross 
	/* 30 */ $_POST['labor_as_percent_of_gross_for_featured_sub_category'] = "";  //  Labor as Percent of Gross for Featured Sub Category
	/* 31 */ $_POST['net_profit_as_percent_of_gross_for_featured_sub_category'] = "";  //  Net Profit as Percent of Gross for Featured Sub Category
	//$_POST['client_take_home'] = "";  //Client Take Home
	/* 32 */ $_POST['average_markdown_for_featured_sub_category'] = "";  //  Average Markdown for Featured Sub Category

	/* 33 */ $_POST['cumulative_operating_loss'] = "";  //  Cumulative Operating Loss
	/* 34 */  $_POST['cumulative_operating_loss_amortization_in_months'] = "";  //  Cumulative Operating Loss Amortization in Months
	/* 35 */  $_POST['talk_rate'] = "";  //  Talk Rate
	/* 36 */  $_POST['gross_profit_split'] = "";  //  Gross Profit Split
	/* 37 */  $_POST['collaborator1_share_of_new_buyers'] = "";  //  Collaborator1 Share of New Buyers
	/* 38 */  $_POST['materials'] = "";  //  Materials
	/* 39 */  $_POST['materials_price'] = "";  //  Materials Price
	/* 40 */  $_POST['verbose_flag'] = "";  //  Verbose Flag
	
}

if (!empty($_POST)) {
	/* 1 */ $category = $_POST['category'];  //Category
	/* 2 */ $collaborator1_sub_categories_in_category = $_POST['collaborator1_sub_categories_in_category'];  //Collaborator1 Sub Categories in Category
	/* 3 */ $featured_sub_category = $_POST['featured_sub_category'];  //Collaborator1 Sub Categories in Category
	/* 4 */ $sub_category_share_of_gross = $_POST['sub_category_share_of_gross'];  //Sub Category Share of Gross
	/* 5 */ $number_skus_in_featured_sub_category = $_POST['number_skus_in_featured_sub_category'];  //  SKUs in Featured Sub Category
	/* 6 */ $target_market_for_featured_sub_category = $_POST['target_market_for_featured_sub_category'];  //  Target Market for Featured Sub Category
	/* 7 */ $households_in_featured_sub_category_segment = $_POST['households_in_featured_sub_category_segment'];  //  Households in Featured Sub Category Segment
	
	/* 8 */ $households_in_featured_sub_category_segment_in_radius = $_POST['households_in_featured_sub_category_segment_in_radius'];  //  Households in Featured Sub Category Segment in Radius
	/* 9 */ $average_new_buyer_retention_in_years = $_POST['average_new_buyer_retention_in_years'];  //  Average New Buyer Retention in Years
	/* 10 */ $average_retention_of_existing_buyers_in_years = $_POST['average_retention_of_existing_buyers_in_years'];  //  Average Retention of Existing Buyers in Years
	/* 11 */ $estimated_featured_sub_category_annual_new_buyer_household_response_rate = $_POST['estimated_featured_sub_category_annual_new_buyer_household_response_rate'];  //  Estimated Featured Sub Category Annual New Buyer Household Response Rate
	/* 12 */ $estimated_touches_needed_per_household_per_response = $_POST['estimated_touches_needed_per_household_per_response'];  // Estimated Touches per Household per Response 
	/* 13 */ $estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment = $_POST['estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment'];  // Estimated Current Market Share for Collaborator1 in Featured Sub Category Segment
	/* 14 */ $current_collaborator1_competitors_in_featured_sub_category_segment = $_POST['current_collaborator1_competitors_in_featured_sub_category_segment'];  // Current Collaborator1 Competitors in Featured Sub Category Segment 
	/* 15 */ $minutes_needed_for_knock = $_POST['minutes_needed_for_knock'];  //  Minutes needed for knock
	/* 16 */ $minutes_needed_for_talk = $_POST['minutes_needed_for_talk']; //  Minutes needed for talk
	
	/* 17 */ $collaborator1_current_featured_sub_category_new_buyer_production_per_week = $_POST['collaborator1_current_featured_sub_category_new_buyer_production_per_week'];  // Collaborator1 Current Featured Sub Category New Buyer Production Per Week
	/* 18 */ $collaborator1_current_data_source_for_featured_sub_category_new_buyer_production_per_week = $_POST['collaborator1_current_data_source_for_featured_sub_category_new_buyer_production_per_week'];  // Collaborator1 Current Data Source for Featured Sub Category New Buyer Production Per Week
	/* 19 */ $featured_sub_category_user_rate = $_POST['featured_sub_category_user_rate'];  // Featured Sub Category User Rate
	/* 20 */ $collaborator1_current_data_source_for_featured_sub_category_user_rate = $_POST['collaborator1_current_data_source_for_featured_sub_category_user_rate'];  // Collaborator1 Current Data Source for Featured Sub Category User Rate
	/* 21 */ //$collaborator2_current_sub_category_gross_per_week = $_POST['collaborator2_current_sub_category_gross_per_week'];  //  Collaborator2 Current Sub Category Gross per Week

	/* 22 */ //$collaborator2_current_sub_gross_data_source = $_POST['collaborator2_current_sub_gross_data_source']; //Collaborator2 Current Sub Category Gross Data Source
	/* 23 */ //$collaborator2_current_new_buyer_in_sub_category_production_per_week = $_POST['collaborator2_current_new_buyer_in_sub_category_production_per_week'];  //Collaborator2 Current New Buyer in Sub Category Production Per Week
	/* 24 */ //$collaborator2_current_new_buyer_in_sub_category_production_per_week_data_source = $_POST['collaborator2_current_new_buyer_in_sub_category_production_per_week_data_source'];  // Collaborator2 Current New Buyer in Sub Category Production Per Week Data Source
	/* 25 */ //$collaborator2_current_featured_sub_category_user_rate = $_POST['collaborator2_current_featured_sub_category_user_rate'];  // Collaborator2 Current Featured Sub Category User Rate
	/* 26 */ //$collaborator2_current_data_source_for_featured_sub_category_user_rate = $_POST['collaborator2_current_data_source_for_featured_sub_category_user_rate'];  // Collaborator2 Current Data Source for Featured Sub Category User Rate

	//$new_customer_goal = $_POST['new_customer_goal'];  //  New Customer Goal
	/* 27 */ $average_transaction_for_featured_sub_category = $_POST['average_transaction_for_featured_sub_category'];  //  Average Transaction for Featured Sub Category
	/* 28 */ $average_transactions_for_featured_sub_category_per_buyer_per_year = $_POST['average_transactions_for_featured_sub_category_per_buyer_per_year']; //  Average Transactions for Featured Sub Category per Buyer per Year
	/* 29 */ $cost_of_goods_sold_for_featured_sub_category_as_percent_of_gross = $_POST['cost_of_goods_sold_for_featured_sub_category_as_percent_of_gross'];  //  Cost of Goods Sold for Featured Sub Category as Percent of Gross
	//$all_other_variable_costs_as_percent_of_gross = $_POST['all_other_variable_costs_as_percent_of_gross'];  //  All Other Variable Costs as Percent of Gross 
	
	//$note_on_all_other_variable_costs_as_percent_of_gross = $_POST['note_on_all_other_variable_costs_as_percent_of_gross'];  //  Note on All Other Variable Costs_as_percent_of_gross 	
	/* 30 */ $labor_as_percent_of_gross_for_featured_sub_category = $_POST['labor_as_percent_of_gross_for_featured_sub_category'];  //  Labor as Percent of Gross
	/* 31 */ $net_profit_as_percent_of_gross_for_featured_sub_category = $_POST['net_profit_as_percent_of_gross_for_featured_sub_category'];  //  Net Profit as Percent of Gross for Featured Sub Category
	//$client_take_home = $_POST['client_take_home'];  //Client Take Home
	/* 32 */ $average_markdown_for_featured_sub_category = $_POST['average_markdown_for_featured_sub_category'];  //  Average Markdown
	
	/* 33 */ $cumulative_operating_loss = $_POST['cumulative_operating_loss'];  //  Cumulative Operating Loss
	/* 34 */ $cumulative_operating_loss_amortization_in_months = $_POST['cumulative_operating_loss_amortization_in_months'];  //  Cumulative Operating Loss Amortization in Months
	/* 35 */ $talk_rate = $_POST['talk_rate'];  //  Talk Rate
	/* 36 */ $gross_profit_split = $_POST['gross_profit_split'];  //  Gross Profit Split
	/* 37 */ $collaborator1_share_of_new_buyers = $_POST['collaborator1_share_of_new_buyers'];  //  Collaborator1 Share of New Buyers
	/* 38 */ $materials = $_POST['materials'];  //  Materials
	/* 39 */ $materials_price = $_POST['materials_price'];  //  Materials Price
	/* 40 */ $verbose_flag = $_POST['verbose_flag'];  //  Verbose Flag
	
}
?>

<form action="" method="post">
	1. Category (txt): <br><input style="color:red;" size="30" value="<?php echo $category; ?>" type="text" name="category" ><br>	
	2. Collaborator1 Sub Categories in Category (int): <br><input style="color:red;" size="30" value="<?php echo $collaborator1_sub_categories_in_category; ?>" type="text" name="collaborator1_sub_categories_in_category" ><br>
	3. Featured Sub Category (txt): <br><input style="color:red;" size="30" value="<?php echo $featured_sub_category; ?>" type="text" name="featured_sub_category" ><br>
	4. Sub Category Share of Gross (dec): <br><input style="color:red;" size="30" value="<?php echo $sub_category_share_of_gross; ?>" type="text" name="sub_category_share_of_gross" ><br>
	5. Number SKUs in Featured Sub Category (int): <br><input style="color:red;" size="30" value="<?php echo $number_skus_in_featured_sub_category; ?>" type="text" name="number_skus_in_featured_sub_category" ><br>	
	6. Target Market for Featured Sub Category (txt): <br><input style="color:red;" size="30" value="<?php echo $target_market_for_featured_sub_category; ?>" type="text" name="target_market_for_featured_sub_category" ><br>
	7. Households in Featured Sub Category Segment (int): <br><input style="color:red;" size="30" value="<?php echo $households_in_featured_sub_category_segment; ?>" type="text" name="households_in_featured_sub_category_segment" ><br>	
	8. Households in Featured Sub Category Segment in Radius (int): <br><input style="color:red;" size="30" value="<?php echo $households_in_featured_sub_category_segment_in_radius; ?>" type="text" name="households_in_featured_sub_category_segment_in_radius" ><br>	
	9. Average New Buyer Retention in Years (dec): <br><input style="color:red;" size="30" value="<?php echo $average_new_buyer_retention_in_years; ?>" type="text" name="average_new_buyer_retention_in_years" ><br>	
	10. Average Retention of Existing Buyers in Years (dec): <br><input style="color:red;" size="30" value="<?php echo $average_retention_of_existing_buyers_in_years; ?>" type="text" name="average_retention_of_existing_buyers_in_years" ><br>	
	11. Estimated Featured Sub Category Annual New Buyer Household Response Rate As Percent of All Avialable Buyers (dec): <br><input style="color:red;" size="30" value="<?php echo $estimated_featured_sub_category_annual_new_buyer_household_response_rate; ?>" type="text" name="estimated_featured_sub_category_annual_new_buyer_household_response_rate" ><br>	
	12. Estimated Touches Needed per Household per Response (ref): <br><input style="color:red;" size="30" value="<?php echo $estimated_touches_needed_per_household_per_response; ?>" type="text" name="estimated_touches_needed_per_household_per_response" ><br>	
	13. Estimated Current Market Share for Collaborator1 in Featured Sub Category Segment (dec): <br><input style="color:red;" size="30" value="<?php echo $estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment; ?>" type="text" name="estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment" ><br>	
	14. Current Collaborator1 Competitors in Featured Sub Category Segment (txt): <br><input style="color:red;" size="30" value="<?php echo $current_collaborator1_competitors_in_featured_sub_category_segment; ?>" type="text" name="current_collaborator1_competitors_in_featured_sub_category_segment" ><br>	
	15. Minutes needed for knock: <br><input style="color:red;" size="30" value="<?php echo $minutes_needed_for_knock; ?>" type="text" name="minutes_needed_for_knock" ><br>
	16. Minutes needed for talk: <br><input style="color:red;" size="30" value="<?php echo $minutes_needed_for_talk; ?>" type="text" name="minutes_needed_for_talk" ><br>
	17. Superseded. <br>
	18. Superseded. <br>
	<!--17. Collaborator1 Current Featured Sub Category New Buyer Production Per Week (ref): <br><input style="color:red;" size="30" value="<?php echo $collaborator1_current_featured_sub_category_new_buyer_production_per_week; ?>" type="text" name="collaborator1_current_featured_sub_category_new_buyer_production_per_week" ><br>  
	18. Collaborator1 Current Data Source for Featured Sub Category New Buyer Production Per Week (ref): <br><input style="color:red;" size="30" value="<?php echo $collaborator1_current_data_source_for_featured_sub_category_new_buyer_production_per_week; ?>" type="text" name="collaborator1_current_data_source_for_featured_sub_category_new_buyer_production_per_week" ><br>-->  
	19. Featured Sub Category User Rate (dec): <br><input style="color:red;" size="30" value="<?php echo $featured_sub_category_user_rate; ?>" type="text" name="featured_sub_category_user_rate" ><br>
	20. Collaborator1 Current Data Source for Featured Sub Category User Rate (txt): <br><input style="color:red;" size="30" value="<?php echo $collaborator1_current_data_source_for_featured_sub_category_user_rate; ?>" type="text" name="collaborator1_current_data_source_for_featured_sub_category_user_rate" ><br>
	21. Superseded. <br>
	22. Superseded. <br>
	23. Superseded. <br>
	24. Superseded. <br>
	25. Superseded. <br>
	26. Superseded. <br>		
	<!--21. Collaborator2 Current Featured Sub Category Gross Per Week: Pending <br>
	22. Collaborator2 Current Data Source for Featured Sub Category Gross: Pending <br>
	23. Collaborator2 Current Featured Sub Category New Buyer Production Per Week: Pending <br>
	24. Collaborator2 Current Data Source for Featured Sub Category for New Buyer Production Per Week: Pending <br>
	25. Collaborator2 Current Featured Sub Category User Rate: Pending <br>
	26. Collaborator2 Current Data Source for Featured Sub Category User Rate: Pending <br>-->
<!-- New Customer Goal
Ave Intermediate Conversion Ratio Based on Sub Cat Usage Rage: 
Is Data Available to Support Intermediate Conversion Ratio (Y/N):-->
	27. Average Transaction for Featured Sub Category (dec): <br><input style="color:red;" size="30" value="<?php echo $average_transaction_for_featured_sub_category; ?>" type="text" name="average_transaction_for_featured_sub_category" ><br>
	28. Average Transactions for Featured Sub Category per Buyer per Year (dec): <br><input style="color:red;" size="30" value="<?php echo $average_transactions_for_featured_sub_category_per_buyer_per_year; ?>" type="text" name="average_transactions_for_featured_sub_category_per_buyer_per_year" ><br>
	29. Cost of Goods Sold for Featured Sub Category as Percent of Gross (dec): <br><input style="color:red;" size="30" value="<?php echo $cost_of_goods_sold_for_featured_sub_category_as_percent_of_gross; ?>" type="text" name="cost_of_goods_sold_for_featured_sub_category_as_percent_of_gross" ><br>
<!--All Other Varible Costs:
NOTE on All Other Varible Costs:-->
	30. Labor as Percent of Gross for Featured Sub Category (dec): <br><input style="color:red;" size="30" value="<?php echo $labor_as_percent_of_gross_for_featured_sub_category; ?>" type="text" name="labor_as_percent_of_gross_for_featured_sub_category" ><br>
<!--Labor as % of Gross for Outbound Work:
Net Profit as % of Gross:
Required Take Home:--> 
	31. Superseded. <br>
	<!--31. Net Profit as Percent of Gross for Featured Sub Category: <br><input style="color:red;" size="30" value="<?php echo $net_profit_as_percent_of_gross_for_featured_sub_category; ?>" type="text" name="net_profit_as_percent_of_gross_for_featured_sub_category" ><br>-->
	32. Average Markdown for Featured Sub Category (dec):<br><input style="color:red;" size="30" value="<?php echo $average_markdown_for_featured_sub_category; ?>" type="text" name="average_markdown_for_featured_sub_category" ><br>
	33. Superseded. <br>
	34. Superseded. <br>
	<!--33. Cumulative Operating Loss (int):<br><input style="color:red;" size="30" value="<?php echo $cumulative_operating_loss; ?>" type="text" name="cumulative_operating_loss" ><br>
	34. Cumulative Operating Loss Amortization in Months :<br><input style="color:red;" size="30" value="<?php echo $cumulative_operating_loss_amortization_in_months; ?>" type="text" name="cumulative_operating_loss_amortization_in_months" ><br>-->
	35. Talk Rate (dec):<br><input style="color:red;" size="30" value="<?php echo $talk_rate; ?>" type="text" name="talk_rate" ><br>
	36. Gross Profit Split (dec):<br><input style="color:red;" size="30" value="<?php echo $gross_profit_split; ?>" type="text" name="gross_profit_split" ><br>
	37. Collaborator1 Share of New Buyers (dec):<br><input style="color:red;" size="30" value="<?php echo $collaborator1_share_of_new_buyers; ?>" type="text" name="collaborator1_share_of_new_buyers" ><br>
	38. Materials (txt):<br><input style="color:red;" size="30" value="<?php echo $materials; ?>" type="text" name="materials" ><br>
	39. Materials Price (dec):<br><input style="color:red;" size="30" value="<?php echo $materials_price; ?>" type="text" name="materials_price" ><br>
	40. Verbose Flag (txt):<br><input style="color:red;" size="30" value="<?php echo $verbose_flag; ?>" type="text" name="verbose_flag" ><br>

	<br><input type="submit" value="Submit">
</form> 

<?php

if (!empty ($_POST)) {
	echo '1. Category: ' 
		. '<h2 style="display:inline;color:green;">' 
		. $category 
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp category';
		}	
	echo '<br><br>';
	
	echo '2. Sub-categories in Catagory: ' 
		. '<h2 style="display:inline;color:green;">' 
		. $collaborator1_sub_categories_in_category 
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp collaborator1_sub_categories_in_category';
		}		
	echo '<br><br>';
	
	echo '3. Featured Sub-category: ' 
		. '<h2 style="display:inline;color:green;">' 
		. $featured_sub_category
		. '</h2>';
		if ($verbose_flag == 1) {	
			echo '<br>' . '&nbsp&nbspfeatured_sub_category';
		}		
	echo '<br><br>';
	
	echo '4. Target Market: ' 
		. '<h2 style="display:inline;color:green;">' 
		. $target_market_for_featured_sub_category
		. '</h2>';		
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsptarget_market_for_featured_sub_category'; 
		}
	echo '<br><br>';
	
	echo '5. Qualified Households in Target Radius: ' 
		. '<h2 style="display:inline;color:green;">' 
		. $households_in_featured_sub_category_segment_in_radius 
		. '</h2>'; 
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsphouseholds_in_featured_sub_category_segment_in_radius'; 
		}
	echo '<br><br>';
	$green5 =
		$households_in_featured_sub_category_segment_in_radius; 
		
	
	echo '6. Estimated Buyer Pool in Featured Segment : ' 
		. '<h2 style="display:inline;color:green;">' 
		. $households_in_featured_sub_category_segment_in_radius
		
		* $featured_sub_category_user_rate
		. '</h2>';		
		if ($verbose_flag == 1) {
			echo  '<br>' . '&nbsp&nbsp above '
				. '<br>' . '&nbsp&nbsp x featured_sub_category_user_rate';			
		}
	echo '<br><br>';
	$green6 = 
		$households_in_featured_sub_category_segment_in_radius
		* $featured_sub_category_user_rate;
	
	echo '7. Estimated Buyer Pool for Collaborator1 in Featured Segment: '
		. '<h2 style="display:inline;color:green;">' 
		. round($households_in_featured_sub_category_segment_in_radius
		* $featured_sub_category_user_rate		
		* $estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment,2)
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp above'
				. '<br>' . '&nbsp&nbsp x estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment';	
		}
	echo '<br><br>';
	
	$green7 = 
		$households_in_featured_sub_category_segment_in_radius
		* $featured_sub_category_user_rate
		* $estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment;
		
		
	
	echo '8. Estimated NEW Buyer Pool for Collaborator1 in Featured Segment:  ' 
		. '<h2 style="display:inline;color:green;">' 
		. round($green6
		
		* $estimated_featured_sub_category_annual_new_buyer_household_response_rate,2)
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp green6'
				. '<br>' . '&nbsp&nbsp x estimated_featured_sub_category_annual_new_customer_household_response_rate';	
		}
	echo '<br><br>';
	$green8 = 
		$green6	
		* $estimated_featured_sub_category_annual_new_buyer_household_response_rate;
		
	echo '9. Estimated Annual Gross for Collaborator1\'s Existing Buyers based on ' . number_format(($estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment*100),0) . '% Collaborator1 Market Share: '
		. '<h2 style="display:inline;color:green;">' 
		. '$'
		. number_format(
		( ($green6 * $estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment)
			 )
		* $average_transaction_for_featured_sub_category
		* $average_transactions_for_featured_sub_category_per_buyer_per_year,2)
		
		. '</h2>';		
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp ( (green6 * $estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment)
							)'
				. '<br>' . '&nbsp&nbsp x average_transaction_for_featured_sub_category'		
				. '<br>' . '&nbsp&nbsp x average_transactions_for_featured_sub_category_per_buyer_per_year';		
		}	
		echo '<br><br>';	
	$green9 = 
		( ($green6 * $estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment)
			)		
		* $average_transaction_for_featured_sub_category
		* $average_transactions_for_featured_sub_category_per_buyer_per_year;
		
	echo '10. Estimated Total Gross for Collaborator1\'s Existing Buyers based on ' . number_format(($estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment*100),0) . '% Collaborator1 Market Share times Average Retention for Existing Buyers: '
		. '<h2 style="display:inline;color:green;">' 
		. '$'
		. number_format( 
			(
			$green6 
			* $estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment
			* $average_transaction_for_featured_sub_category
			* $average_transactions_for_featured_sub_category_per_buyer_per_year
			* $average_new_buyer_retention_in_years
			)
			
			,2)
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '(discounts for future cashflows not included)'
			. '<br>' . '('
			. '<br>' . 'green6' 
			. '<br>' . '* estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment'
			. '<br>' . '* average_transaction_for_featured_sub_category'
			. '<br>' . '* average_transactions_for_featured_sub_category_per_buyer_per_year'
			. '<br>' . '* average_new_buyer_retention_in_years'
			. '<br>' . ')';
			
			
			
		}		
		echo '<br><br>';	
	$green10 = 
		(
			$green6
			* $estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment
			* $average_transaction_for_featured_sub_category
			* $average_transactions_for_featured_sub_category_per_buyer_per_year
			* $average_new_buyer_retention_in_years
			);
	//echo '<br>' . $green10 . '<br>';	

	echo '11. Estimated Annual Gross for Collaborator1\'s ' . number_format(($collaborator1_share_of_new_buyers*100),0) . '% Share of Available New Buyers: '
		. '<h2 style="display:inline;color:green;">' 
		. '$'
		. number_format(
			$green8 
			* $collaborator1_share_of_new_buyers
			* $average_transaction_for_featured_sub_category
			* $average_transactions_for_featured_sub_category_per_buyer_per_year			
		,2)
			
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp green8' 
				. '<br>' . '&nbsp&nbsp* collaborator1_share_of_new_buyers'
				. '<br>' . '&nbsp&nbsp* average_transaction_for_featured_sub_category'
				. '<br>' . '&nbsp&nbsp* average_transactions_for_featured_sub_category_per_buyer_per_year';			
		}
		echo  '<br><br>';	
	$green11 = 
		$green8 
		* $collaborator1_share_of_new_buyers
		* $average_transaction_for_featured_sub_category
		* $average_transactions_for_featured_sub_category_per_buyer_per_year;
		
		
	echo '12. Estimated Total Gross for Collaborator1\'s ' . number_format(($collaborator1_share_of_new_buyers*100),0) . '% Share of Available New Buyers times Average New Buyer Retention in Years: '
		. '<h2 style="display:inline;color:green;">' 
		. '$'
		. number_format(
			$green11				
			* $average_new_buyer_retention_in_years
		,2)	
		. '</h2>';		
		if ($verbose_flag == 1) {
			echo '<br>' . '(discounts for future cashflows not included)'
			. '<br>' . '&nbsp&nbsp green 11'
			. '<br>' . '&nbsp&nbsp x average_new_buyer_retention_in_years';
		}
		echo '<br><br>';
	$green12 =	
		$green11				
		* $average_new_buyer_retention_in_years;
	
	echo '13. Estimated ANNUAL Gross for Collaborator1\'s Existing Buyers based on ' . number_format(($estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment*100),0) . 
				'% Collaborator1 Market Share and ' . number_format(($collaborator1_share_of_new_buyers*100),0) . '% Share of Available New Buyers: '
		. '<h2 style="display:inline;color:green;">' 
		. '$'
		. number_format(($green9 + $green11),2)			
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . 'Total lines 9 & 11';
		}	
		echo '<br><br>';	
		
	echo '14. Estimated TOTAL Gross for Collaborator1\'s Existing Buyers based on ' . number_format(($estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment*100),0) . 
				'% Collaborator1 Market Share and ' . number_format(($collaborator1_share_of_new_buyers*100),0) . '% Share of Available New Buyers: '
		. '<h2 style="display:inline;color:green;">' 
		. '$'
		. number_format(($green10 + $green12),2)			
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . 'Total lines 10 & 12';
		}	
		
		$green14 = 	$green10 + $green12;
	
	echo '<br><br>';
		
	echo '15. Estimated Collaborator1 Buyers Including Collablorator1\'s ' . number_format(($collaborator1_share_of_new_buyers*100),0) . '% Share of New Buyers: '
		. '<h2 style="display:inline;color:green;">' 
		. number_format(
			($green6 * $estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment)
			+ (
				$green8
				* $collaborator1_share_of_new_buyers
			)
		,0)
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp (green6 x estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment)'		
			. '<br>' . '&nbsp&nbsp + (green8 x collaborator1_share_of_new_buyers)';
		}		
		echo '<br><br>';	
	$green15 = 	
		($green6 * $estimated_current_market_share_for_collaborator1_in_featured_sub_category_segment)
		+ (
			$green8
			* $collaborator1_share_of_new_buyers
		);
		
	echo '16. Estimated Gross per Buyer: '
		. '<h2 style="display:inline;color:green;">' 
		. '$'
		. number_format(($green14/$green15),2)
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . 'green14 / green15';
		}	
		echo '<br><br>';	
		
	echo '17. Direct Cost (CGS, Labor and Price Adjustments) for Line 14: '
		. '<h2 style="display:inline;color:green;">' 
		. '$'
		. number_format((
			(
				$green14 		
				* $cost_of_goods_sold_for_featured_sub_category_as_percent_of_gross			
			)	
				
			+ (
				$green14 
				* (
					$labor_as_percent_of_gross_for_featured_sub_category
					* $sub_category_share_of_gross
				)
			)
				
			+ (
				$green14
				* $average_markdown_for_featured_sub_category
			)		
			
			+ (
				$materials_price
				* $sub_category_share_of_gross					
			)
		),2)
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp cost_of_goods_sold_for_featured_sub_category_as_percent_of_gross'		
			. '<br>' . '&nbsp&nbsp + labor_as_percent_of_gross_for_featured_sub_category'
			. '<br>' . '&nbsp&nbsp * sub_category_share_of_gross'
			. '<br>' . '&nbsp&nbsp + average_markdown_for_featured_sub_category'
			. '<br>' . '&nbsp&nbsp + materials_price'
			. '<br>' . '&nbsp&nbsp * sub_category_share_of_gross';
		}
		$green17 = 
			(
				$green14 		
				* $cost_of_goods_sold_for_featured_sub_category_as_percent_of_gross			
			)	
				
			+ (
				$green14 
				* (
					$labor_as_percent_of_gross_for_featured_sub_category
					* $sub_category_share_of_gross
				)
			)
				
			+ (
				$green14
				* $average_markdown_for_featured_sub_category
			)		
			
			+ (
				$materials_price
				* $sub_category_share_of_gross					
			);
		echo '<br><br>';	
		
	echo '18. Gross Profit for Lines 10 & 12 Net CGS, Labor and Price Adjustments: '
		. '<h2 style="display:inline;color:green;">' 
		. '$'
		. number_format(
			$green14 - $green17
		,2)		
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp green14 - green17';			
		}		
		echo '<br><br>';
	$green18 = $green14 - $green17;
	
	echo '19. Estimated Gross Profit per Buyer: '
		. '<h2 style="display:inline;color:green;">' 
		. '$'
		. number_format(($green18/$green15),2)
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp green 18 / green 15';
		}	
		echo '<br><br>';
	$green19 = 	$green18/$green15;
	
	echo '20. buy service Budget based on buy service\'s ' . number_format(($gross_profit_split*100),0) . '% share of Gross Profit: '
		. '<h2 style="display:inline;color:green;">' 
		. '$'
		. number_format(
			($green18*$gross_profit_split)
			
		,2)
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp green18 * gross_profit_split';
			
		}		
		echo '<br><br>';
	$green20 = 	($green18*$gross_profit_split);
	//echo '$green20: ' . $green20;	
	
	echo '21. Value per Knock for All Collaborator1 Transactions based on buy service\'s ' . number_format(($gross_profit_split*100),0) . '% share of Gross Profit: '
		. '<h2 style="display:inline;color:green;">' 
		. '$'
		. number_format(
			(
				(
					$green20 
					* (1 - $featured_sub_category_user_rate) // target knock budget based on 1 - user ratio   
					* 
					(  //  adjust knock budget based on ratio of time needed for knock : talks adjusted on 1 - user ratio   
						$minutes_needed_for_knock * (1 / $featured_sub_category_user_rate) * $talk_rate
					)
					/ 
					(
						$minutes_needed_for_talk * (1 / $featured_sub_category_user_rate)
					)
				)
				/ (  // knocks needed to reach goal
					($green7 + ($green8 * $collaborator1_share_of_new_buyers))
					* $talk_rate
					* (1 / $featured_sub_category_user_rate)
				)	
				
				
			) 
		,2)
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp green20 * (1 - featured_sub_category_user_rate)'
		. '<br>' . '&nbsp&nbsp * (minutes_needed_for_knock * (1 / featured_sub_category_user_rate) * talk_rate)'
		. '<br>' . '&nbsp&nbsp / (minutes_needed_for_talk * (1 / featured_sub_category_user_rate))'
		. '<br>' . '&nbsp&nbsp / (green7 + (green8 * collaborator1_share_of_new_buyers))'
		. '<br>' . '&nbsp&nbsp * talk_rate'
		. '<br>' . '&nbsp&nbsp * (1 / featured_sub_category_user_rate)';
		}	
		echo '<br><br>';	
	$green21 = 
		(
					$green20 
					* (1 - $featured_sub_category_user_rate) 
					* ($minutes_needed_for_knock * (1 / $featured_sub_category_user_rate) * $talk_rate)
					/ ($minutes_needed_for_talk * (1 / $featured_sub_category_user_rate))
				)
				/ (
					($green7 + ($green8 * $collaborator1_share_of_new_buyers))
					* $talk_rate
					* (1 / $featured_sub_category_user_rate)
				)	
		; 
	//echo '$green21: ' . $green21;		
	
	echo '22. Knocks in buy service Budget: '
		. '<h2 style="display:inline;color:green;">' 
		. number_format(
					($green7 + ($green8 * $collaborator1_share_of_new_buyers))
					* $talk_rate
					* (1 / $featured_sub_category_user_rate)
		,0)		
		. ' [$'
		. number_format(
			$green20 
					* (1 - $featured_sub_category_user_rate) 
					* ($minutes_needed_for_knock * (1 / $featured_sub_category_user_rate) * $talk_rate)
					/ ($minutes_needed_for_talk * (1 / $featured_sub_category_user_rate))		,2)
		.']'
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp (green7 + (green8 * collaborator1_share_of_new_buyers))'
				. '<br>' . '&nbsp&nbsp * talk_rate'
				. '<br>' . '&nbsp&nbsp / ($minutes_needed_for_talk * (1 / $featured_sub_category_user_rate))';
		}			
		echo '<br><br>';
	
	echo '23. Value per Talk for all Collaborator1 Transactions based on buy service\'s ' . number_format(($gross_profit_split*100),0) . '% share of Gross Profit: '
		. '<h2 style="display:inline;color:green;">' 
		. '$'
		. number_format(
			(
				(
				$green20 
				- ($green20 
					* (1 - $featured_sub_category_user_rate) 
					* ($minutes_needed_for_knock * (1 / $featured_sub_category_user_rate) * $talk_rate)
					/ ($minutes_needed_for_talk * (1 / $featured_sub_category_user_rate)))
				)
				/
				( // talks needed to reach goal
				($green7 + ($green8 * $collaborator1_share_of_new_buyers))
				* (1 / $featured_sub_category_user_rate)
				)
				
			) 
		,2)
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp (green20 '
			. '<br>' . '&nbsp&nbsp - ($green20'
			. '<br>' . '&nbsp&nbsp * (1 - $featured_sub_category_user_rate) '
			. '<br>' . '&nbsp&nbsp * ($minutes_needed_for_knock * (1 / $featured_sub_category_user_rate) * $talk_rate)'
			. '<br>' . '&nbsp&nbsp / ($minutes_needed_for_talk * (1 / $featured_sub_category_user_rate))))'			
			. '<br>' . '&nbsp&nbsp / (($green7 + ($green8 * $collaborator1_share_of_new_buyers))'
			. '<br>' . '&nbsp&nbsp * (1 / $featured_sub_category_user_rate))';
			
			
		}	
		echo '<br><br>';
	$green23 = 
		(
				(
				$green20 
				- ($green20 
					* (1 - $featured_sub_category_user_rate) 
					* ($minutes_needed_for_knock * (1 / $featured_sub_category_user_rate) * $talk_rate)
					/ ($minutes_needed_for_talk * (1 / $featured_sub_category_user_rate)))
				)
				/
				(
				($green7 + ($green8 * $collaborator1_share_of_new_buyers))
				* (1 / $featured_sub_category_user_rate)
				)
	);
	
	echo '24. Talks in Collaborator\'s Budget: '
		. '<h2 style="display:inline;color:green;">' 
		. number_format(
			($green7 + ($green8 * $collaborator1_share_of_new_buyers))
			* (1 / $featured_sub_category_user_rate)
		,0)
		. ' [$'
		. number_format(
			(
				$green20 
				- $green20 
					* (1 - $featured_sub_category_user_rate) 
					* ($minutes_needed_for_knock * (1 / $featured_sub_category_user_rate) * $talk_rate)
					/ ($minutes_needed_for_talk * (1 / $featured_sub_category_user_rate))
				)		,2)
		.']'
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp ($green7 + ($green8 * $collaborator1_share_of_new_buyers))'
			. '<br>' . '&nbsp&nbsp * (1 / $featured_sub_category_user_rate)';
		}		
		echo '<br><br>';	
	
	echo '25. Cost per Buyer based on buy service\'s ' . number_format(($gross_profit_split*100),0) . '% share of Gross Profit: '
		. '<h2 style="display:inline;color:green;">' 
		. '$'
		. number_format(
			(
				($green21 * $talk_rate * (1/$featured_sub_category_user_rate))
				+ ($green23 * (1/$featured_sub_category_user_rate))	
			)
			
		,2)
		. '</h2>';
		$green25 = ($green21 * $talk_rate * (1/$featured_sub_category_user_rate))
				+ ($green23 * (1/$featured_sub_category_user_rate))	;
		echo '<br><br>';
	
	echo '26. Time to generate a Buyer: '
		. '<h2 style="display:inline;color:green;">' 
		. number_format(
			(
				($minutes_needed_for_knock * (1 / $featured_sub_category_user_rate) * $talk_rate)
				+ ($minutes_needed_for_talk * (1 / $featured_sub_category_user_rate))
			)
			
		,2)
		. ' minutes </h2>';
		
		$green26 = ($minutes_needed_for_knock * (1 / $featured_sub_category_user_rate) * $talk_rate)
				+ ($minutes_needed_for_talk * (1 / $featured_sub_category_user_rate));
		echo '<br><br>';
	
	echo '27. Hourly rate: '
		. '<h2 style="display:inline;color:green;">$' 
		. number_format(
			(
				$green25/($green26/60)
			)
			
		,2)
		. '</h2>';
		echo '<br><br>';	
/*	
	echo '25. Collaborator1 New Buyer Goal: '
		. '<h2 style="display:inline;color:green;">' 
		
		. number_format(
			(
				($green8 * $collaborator1_share_of_new_buyers)	
			)
			
		,0)
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp (green8 x collaborator1_share_of_new_buyers';
		}		
		echo '<br><br>';	
	$green25 = 	
		($green8 * $collaborator1_share_of_new_buyers)	;	
	
	
	echo '26. New Buyer Total Gross for Collaborator1: '
		. '<h2 style="display:inline;color:green;">' 
		. '$'
		. number_format(
			(
				$green25 
				* $average_transactions_for_featured_sub_category_per_buyer_per_year 
				* $average_transaction_for_featured_sub_category
				* $average_new_buyer_retention_in_years	
			)
			
		,2)
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp green 25 '
			. '<br>' . '&nbsp&nbsp * $average_transactions_for_featured_sub_category_per_buyer_per_year '
			. '<br>' . '&nbsp&nbsp * $average_transaction_for_featured_sub_category'
			. '<br>' . '&nbsp&nbsp * $average_new_buyer_retention_in_years';
		}		
		echo '<br><br>';	
	$green26 = 	
		$green25 
		* $average_transactions_for_featured_sub_category_per_buyer_per_year 
		* $average_transaction_for_featured_sub_category
		* $average_new_buyer_retention_in_years;
	
	echo '27. New Buyer Gross Profit: '
		. '<h2 style="display:inline;color:green;">' 
		. '$'
		. number_format(
				$green26 
				* (1 - ($green17 / $green14))			
		,2)
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp green 26 '
				. '<br>' . '&nbsp&nbsp * (1 - ($green17 / $green14))';
		}			
		echo '<br><br>';		
	$green27 = 	
		$green26 * (1 - ($green17 / $green14));	
		
	echo '28. buy service ' . number_format(($gross_profit_split*100),0) . '% share of New Buyer Gross Profit: '
		. '<h2 style="display:inline;color:green;">' 
		. '$'
		. number_format(
			(
				($green27 * $gross_profit_split)
				
			)
			
		,2)
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp green 27 '
				. '<br>' . '&nbsp&nbsp * gross_profit_split';	
				
		}			
		echo '<br><br>';	
	$green28 = 	
		($green27 * $gross_profit_split)
		
	;		


		
	echo '29. Value per Knock per for Collaborator1 New Buyers: '
		. '<h2 style="display:inline;color:green;">' 
		. '$'
		. number_format(
			$green28				
			/ (
				$households_in_featured_sub_category_segment_in_radius
				* $talk_rate			
			)			 
		,2)
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp green 28'		 
				. '<br>' . '&nbsp&nbsp / (households_in_featured_sub_category_segment_in_radius * talk_rate)';
		}			
		echo '<br><br>';
	$green29 = 
		$green28				
		/ (
			$households_in_featured_sub_category_segment_in_radius
			* $talk_rate			
		);		
		
	echo '30. New Buyer Knocks in buy service Budget: '
		. '<h2 style="display:inline;color:green;">' 
		. number_format(($green28/$green29),0)
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp green 28'
			. '<br>' . '&nbsp&nbsp / green 29';
		}		
		echo '<br><br>';
		
	echo '31. Value per Knock for Collaborator1 New Transactions: '
		. '<h2 style="display:inline;color:green;">' 
		. '$'
		. number_format(
				$green28  
				/ $green25
				/ (1 / $featured_sub_category_user_rate)
				
		,2)
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp green 28'
				. '<br>' . '&nbsp&nbsp / green 25'
				. '<br>' . '/ (1 / $featured_sub_category_user_rate)';
		}			
		echo '<br><br>';
	$green31 = 
		$green28  
		/ $green25
		/ (1 / $featured_sub_category_user_rate)
	;
	
	echo '32. New Buyer Talks in Collaborator\'s Budget: '
		. '<h2 style="display:inline;color:green;">' 
		. number_format(($green28/$green31),0)
		. '</h2>';
		if ($verbose_flag == 1) {
			echo '<br>' . '&nbsp&nbsp green 28'
				. '<br>' . '&nbsp&nbsp / green 31';
		}			
		echo '<br><br>';	
	
		
*/	
}

?>

