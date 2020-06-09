<?php
  
  public function resizer (Request $request){
    
    $validatedData = $request->validate([
      ‘image’ => ‘bail|required|mimes:jpeg, bmp, png|size:5000|dimensions:min_width=100, min_height=100’,
      ‘resize’ => ‘required’
      ])
  }

?>
