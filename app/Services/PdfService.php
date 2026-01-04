<?php

namespace App\Services;

use App\Models\Pdf;
use App\Enums\ActiveInactive;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class PdfService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAllData($orderBy = 'sort_order', $direction = 'asc')
    {
        $Pdfs = Pdf::orderBy($orderBy, $direction)->latest();
        return $Pdfs;
    }

    public function findData($encryptedId)
    {
        $Pdf = Pdf::findOrFail(decrypt($encryptedId));
        return $Pdf;
    }

    public function getFeaturedPdfs()
    {
        $Pdfs = Pdf::where('is_featured', true)
            ->where('status', ActiveInactive::ACTIVE->value)
            ->orderBy('sort_order')
            ->get();
        return $Pdfs;
    }

    public function createData(array $data): Pdf
    {
        /**
         * ================================
         * COVER IMAGE
         * ================================
         */
        if (
            isset($data['cover_image']) &&
            $data['cover_image'] instanceof UploadedFile
        ) {
            $data['cover_image'] = $data['cover_image']
                ->store('pdfs/covers', 'public');
        }

        /**
         * ================================
         * PDF FILE
         * ================================
         */
        if (
            isset($data['file']) &&
            $data['file'] instanceof UploadedFile
        ) {
            $data['file'] = $data['file']
                ->store('pdfs/files', 'public');
        }

        /**
         * ================================
         * DEFAULTS & AUDIT
         * ================================
         */
        $data['created_by'] = admin()->id ?? null;
        $data['is_featured'] = $data['is_featured'] ?? false;

        return Pdf::create($data);
    }

    public function updateData($encryptedId, array $data): Pdf
    {
        $id = $encryptedId;
        $pdf = Pdf::findOrFail($id);

        /**
         * ================================
         * COVER IMAGE
         * ================================
         */
        if (
            isset($data['cover_image']) &&
            $data['cover_image'] instanceof UploadedFile
        ) {
            if (
                $pdf->cover_image &&
                Storage::disk('public')->exists($pdf->cover_image)
            ) {
                Storage::disk('public')->delete($pdf->cover_image);
            }

            $data['cover_image'] = $data['cover_image']
                ->store('pdfs/covers', 'public');
        } else {
            unset($data['cover_image']); // keep old
        }

        /**
         * ================================
         * PDF FILE
         * ================================
         */
        if (
            isset($data['file']) &&
            $data['file'] instanceof UploadedFile
        ) {
            if (
                $pdf->file &&
                Storage::disk('public')->exists($pdf->file)
            ) {
                Storage::disk('public')->delete($pdf->file);
            }

            $data['file'] = $data['file']
                ->store('pdfs/files', 'public');
        } else {
            unset($data['file']); // keep old
        }

        /**
         * ================================
         * AUDIT
         * ================================
         */
        $data['updated_by'] = admin()->id ?? null;

        $pdf->update($data);

        return $pdf;
    }

    public function deleteData($encryptedId)
    {
        DB::transaction(function () use ($encryptedId) {
            $Pdf = $this->findData($encryptedId);
            $Pdf->delete();
        });
    }
}
