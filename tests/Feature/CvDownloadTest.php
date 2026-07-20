<?php

namespace Tests\Feature;

use Tests\TestCase;

class CvDownloadTest extends TestCase
{
    public function test_cv_route_displays_the_pdf_inline(): void
    {
        $response = $this->get('/cv.pdf');

        $response->assertStatus(200);
        $response->assertHeader('content-type', 'application/pdf');
        $response->assertHeader('content-disposition', 'inline; filename="Andres Pineda - CV.pdf"');
    }
}
