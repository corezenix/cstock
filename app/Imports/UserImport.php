<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

use App\Models\User;

class UserImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function modal(array $row)
    {

		return new User([
			'shop_name'=>$row['shop_name'],
			'contact_person'=>$row['contact_person'],
			'country_code'=>$row['country_code'],
			'mobile'=>$row['mobile'],
			'user_mobile'=>$row['country_code'].$row['mobile'],
			'whatsapp_no'=>$row['whatsapp_no'],
			'email'=>$row['email'],
			'role_id'=>$row['role_id'],
			'address'=>$row['address'],
			'location'=>$row['location'],
			'city'=>$row['city'],
			'district'=>$row['district'],
			'state'=>$row['state'],
			'pincode'=>$row['pincode'],
			'status'=>1,
			'password'=>$row['password'],
			'created_by'=>1,
			]);
    }
}
