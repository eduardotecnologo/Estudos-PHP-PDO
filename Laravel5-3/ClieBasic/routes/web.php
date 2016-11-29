<?php


Route::get('/', function () {
    
	// $customers = Edu\Customer::take(10)->get();

	// dd($customers->toArray());

	// $customer = new Edu\Customer();

	// $customer->name = 'Kade Corwin'; 
	
	// $customer->city = 'Schroederhaven'; 
	
	// $customer->state = 'IN'; 
	
	// $customer->birthday = '1995-10-15 08:24:00';  
	
	// $customer->save(); 

	// dd($customer->toArray());


	$customer = Edu\Customer::find(2);

	dd($customer->created_at);

});
