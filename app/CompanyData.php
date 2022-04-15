<?php

namespace App;

use App\Contracts\Company as Company;
use Spatie\LaravelData\Data;
use Storage;

class CompanyData extends Data implements Company
{
    public function __construct(
        public AddressData $address,
        public ?string $name = null,
        public ?string $website = null,
        public ?string $email = null,
        public ?string $logoUrl = null,
        public string $logoPath = 'no_image.jpg',
        public string $phone = '(_ _ _) _ _ _- _ _ _ _',
        public string $fax = '(_ _ _) _ _ _- _ _ _ _',
    ) {
    }

    public function name(): string
    {
        return $this->name;
    }

    public function address(): AddressData
    {
        return $this->address;
    }

    public function streetAddress(): string
    {
        $streetAddress = $this->address->street;
        if ($this->address->lineTwo) {
            $streetAddress .= ', ' . $this->address->lineTwo;
        }

        return $streetAddress;
    }

    public function citStateZip(): string
    {
        $citStateZip = $this->address->city . ', ' . $this->address->state . ' ' . $this->address->zip;
        return $citStateZip;
    }

    public function phone(): string
    {
        return $this->phone;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function website(): string
    {
        return $this->website;
    }

    public function logoPath(): string
    {
        return ($this->getLogoDisk())->path($this->logoPath);
    }

    public function logoUrl(): string
    {
        return $this->logUrl;
    }

    public function fax(): string
    {
        return $this->fax;
    }

    protected function getLogoDisk()
    {
        return Storage::disk(config('jetstream.profile_photo_disk', 'public'));
    }
}
