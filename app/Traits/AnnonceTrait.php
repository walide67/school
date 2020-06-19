<?php
 namespace App\Traits;

 use App\Models\Annonce;

 trait AnnonceTrait {

    public function createAnnonce($data, $parent, $photo_path){
        $annonce = $parent->annonces()->create([
            'annonce_title' => $data['annonce_title'],
            'annonce_content' => $data['annonce_desc'],
            'annonce_photo' => $photo_path,
            'expired_at' => $data['annonce_ex_at'],
             ]);
        return $annonce;
    }
 }