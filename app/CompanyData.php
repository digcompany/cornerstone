<?php

namespace App;

use App\Contracts\Company as Company;
use Illuminate\Support\Facades\Storage;
use Spatie\LaravelData\Data;

class CompanyData extends Data implements Company
{
    public function __construct(
        public AddressData $address,
        public ?string $name = null,
        public ?string $website = null,
        public ?string $email = null,
        public ?string $logoUrl = null,
        public ?string $logoPath = null,
        public ?string $phone = null,
        public ?string $fax = null
    ) {
    }

    public function name(): string
    {
        return $this->name ?? '';
    }

    public function address(): AddressData
    {
        return $this->address;
    }

    public function streetAddress(): string
    {
        $streetAddress = $this->address->street;
        if (isset($this->address->lineTwo) && strlen($this->address->lineTwo) > 1) {
            $streetAddress .= ', ' . $this->address->lineTwo;
        }

        return $streetAddress;
    }

    public function cityStateZip(): string
    {
        if (! isset($this->address->city) || ! isset($this->address->state) || ! isset($this->address->zip) ||
            strlen($this->address->city) < 1 || strlen($this->address->state) < 1 || strlen($this->address->zip) < 1) {
            return '';
        }

        return $this->address->city . ', ' . $this->address->state . ' ' . $this->address->zip;
    }

    public function phone(): string
    {
        return $this->phone ?? config('company.empty_phone');
    }

    public function email(): string
    {
        return $this->email ?? '';
    }

    public function website(): string
    {
        return $this->website ?? '';
    }

    public function logoPath(): string
    {
        return ($this->getLogoDisk())->path($this->logoPath ?? config('company.empty_logo_path'));
    }

    public function logoUrl(): string
    {
        return $this->logUrl;
    }

    public function fax(): string
    {
        return $this->fax ?? config('company.empty_fax');
    }

    protected function getLogoDisk()
    {
        return Storage::disk(config('jetstream.profile_photo_disk', 'public'));
    }
}
