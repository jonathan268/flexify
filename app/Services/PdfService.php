<?php

class PdfService {
    public function generatePayslip($salary){
        return PDF::loadView('pdf.payslip', compact('salary'));
    }
}


?>
