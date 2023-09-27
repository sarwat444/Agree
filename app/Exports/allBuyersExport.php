<?php

namespace App\Exports;

use App\Models\Buyers;
use App\Models\SubCategory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class allBuyersExport implements FromCollection , WithHeadings,WithEvents
{
    function __construct() {
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $userToExport=Buyers::select(['full_name','company_name','email','internationalNumber','countryCode','website'])->get();
        $Data=Buyers::with(['BuyerAddressData','BuyersInterestsData'])->get();

        $UserInterestsText='';
        if($Data->BuyersInterestsData){
            for ($i=0;$i<count($Data->BuyersInterestsData->sub_category_ids) ;$i++){
                $subCategory=SubCategory::whereId($Data->BuyersInterestsData->sub_category_ids[$i])->first();
                $UserInterestsText=$UserInterestsText.$subCategory->name_en.'  ,  ';

            }
            $Data->userInterest=$UserInterestsText;
        }else{
            $Data->userInterest='none';
        }
        if($Data->BuyerAddressData){
            $userToExport[0]->Country=$Data->BuyerAddressData->CountriesData->name;
            $userToExport[0]->State=$Data->BuyerAddressData->StatesData->name;
            $userToExport[0]->City=$Data->BuyerAddressData->CitiesData->name;
            $userToExport[0]->Town=$Data->BuyerAddressData->town;
            $userToExport[0]->Address=$Data->BuyerAddressData->address;
        }else{
            $userToExport[0]->Country='';
            $userToExport[0]->State='';
            $userToExport[0]->City='';
            $userToExport[0]->Town='';
            $userToExport[0]->Address='';
        }

        $userToExport[0]->userInterest=$Data->userInterest;
        return $userToExport;
    }

    public function headings(): array
    {
        $columns = $this->getColumns();
        return $columns;
    }
    public function getColumns(){

        $columns = [
            'Full Name',
            'Company Name',
            'Email',
            'Phone Number',
            'Country Code',
            'Website',
            'Country',
            'State',
            'City',
            'Town',
            'Address',
            'User Interests',

        ];

        return $columns;
    }

    public function headingRow(): int
    {
        return 2;
    }

    public function registerEvents(): array
    {

        return [
            AfterSheet::class=> function(AfterSheet $event) {
                $event->sheet->getDelegate()->getStyle('A1:Z1')
                    ->getFill()
                    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()
                    ->setARGB('A9D08E');
                $event->sheet->getDelegate()->getStyle('A1:Z1')
                    ->getFont()
                    ->getColor()
                    ->setARGB('FF0000');
                $event->sheet->getColumnDimension('A')->setAutoSize(true);
                $event->sheet->getColumnDimension('B')->setAutoSize(true);
                $event->sheet->getColumnDimension('C')->setAutoSize(true);
                $event->sheet->getColumnDimension('D')->setAutoSize(true);
                $event->sheet->getColumnDimension('E')->setAutoSize(true);
                $event->sheet->getColumnDimension('F')->setAutoSize(true);
                $event->sheet->getColumnDimension('G')->setAutoSize(true);
                $event->sheet->getColumnDimension('H')->setAutoSize(true);
                $event->sheet->getColumnDimension('I')->setAutoSize(true);
                $event->sheet->getColumnDimension('J')->setAutoSize(true);
                $event->sheet->getColumnDimension('K')->setAutoSize(true);
                $event->sheet->getColumnDimension('L')->setAutoSize(true);
                $event->sheet->getColumnDimension('M')->setAutoSize(true);
                $event->sheet->getColumnDimension('N')->setAutoSize(true);
                $event->sheet->getColumnDimension('O')->setAutoSize(true);
                $event->sheet->getColumnDimension('P')->setAutoSize(true);
                $event->sheet->getColumnDimension('Q')->setAutoSize(true);
                $event->sheet->getColumnDimension('R')->setAutoSize(true);
                $event->sheet->getColumnDimension('S')->setAutoSize(true);
                $event->sheet->getColumnDimension('T')->setAutoSize(true);
                $event->sheet->getColumnDimension('U')->setAutoSize(true);
                $event->sheet->getColumnDimension('V')->setAutoSize(true);
                $event->sheet->getColumnDimension('W')->setAutoSize(true);
                $event->sheet->getColumnDimension('X')->setAutoSize(true);
                $event->sheet->getColumnDimension('Y')->setAutoSize(true);
                $event->sheet->getColumnDimension('Z')->setAutoSize(true);


            },
        ];
    }
}
