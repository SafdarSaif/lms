
<?php
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

if (!function_exists('uploadImage')) {
    function uploadImage($image, $folder, $oldImagePath = null)
    {
        // Store path inside the 'storage/app' directory, no public assets path
        $uploadPath = "images/{$folder}"; // No hardcoding public path

        // Delete old image if exists
        if ($oldImagePath && Storage::exists($oldImagePath)) {
            Storage::delete($oldImagePath);
        }

        // Generate a unique filename for the image
        $filename = time() . '.' . $image->getClientOriginalExtension();

        // Store the image in the 'storage/app/images/{folder}' directory
        $path = $image->storeAs($uploadPath, $filename, 'public'); // 'public' disk refers to storage/app/public

        // Return the public URL (accessible via the storage:link symbolic link)
        return Storage::url($path); // This will return a URL like /storage/images/{folder}/{filename}
    }
}

if (!function_exists('deleteImage')) {
    function deleteImage($imagePath)
    {
        if ($imagePath) {
            // Delete the image from storage
            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }
        }
    }
}
