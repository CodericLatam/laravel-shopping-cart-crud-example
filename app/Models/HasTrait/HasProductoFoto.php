<?php

namespace App\Models\HasTrait;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
trait HasProductoFoto
{
    /*
     * @param  \Illuminate\Http\UploadedFile  $foto
     * @return void
     */
    public function updateProductoPhoto(UploadedFile $foto)
    {
        tap($this->foto, function ($previous) use ($foto) {
            $this->forceFill([
                'foto' => $foto->storePublicly(
                    'producto-photos', ['disk' => 'public']
                ),
            ])->save();

            if ($previous) {
                Storage::disk('public')->delete($previous);
            }
        });
    }

    public function deleteProductoPhoto()
    {
        Storage::disk('public')->delete($this->foto);
    }

    public function getProductoPhotoUrlAttribute()
    {
        return $this->foto
                    ? Storage::disk('public')->url($this->foto)
                    : null;
    }
    
}