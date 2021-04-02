<?php


namespace App\Imports;


use App\Models\contact\Contact;
use App\Services\BrandService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class ContactsImport implements ToModel
{
    private $userId;

    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @inheritDoc
     */
    public function model(array $row)
    {

        return new Contact([
            'user_id' => $this->userId,
            'name' => $row[0],
            'birthdate' => $row[1],
            'phone_number' => $row[2],
            'address' => $row[3],
            'credit_card' => Hash::make($row[4]),
            'credit_card_last' => substr($row[4], -4),
            'brand' => BrandService::getBrand($row[4]),
            'email' => $row[5]
        ]);
    }
}
