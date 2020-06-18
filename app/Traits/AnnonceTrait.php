<?php
 namespace App\Traits;

 use App\Models\Annonce;

 trait AnnonceTrait {

    public function createAnnonce($data, $annonce_photo, $annonceType, $subadminId = null, $teacherId = null){
        return Annonce::create([
            'annonce_title' => $data['annonce_title'],
            'annonce_content' => $data['annonce_desc'],
            'annonce_photo' => $annonce_photo,
            'annonce_type' => $annonceType,
            'subadmin_id' => $subadminId,
            'teacher_id' => $teacherId,
            'created_at' => time(),
        ]);
    }
 }