public function getNameAcronymAttribute()
{
    $acronym = "";
    $name = $this->name;

    if ($name) {
        $words = preg_split("/\s+/", $name);

        foreach ($words as $w) {
          $acronym .= $w[0];
        }

        $acronym = substr($acronym, 0, 2);
    }

    return $acronym;
}
