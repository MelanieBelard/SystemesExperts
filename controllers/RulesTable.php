<?php 

class RulesTable {

    public static function verifyFigure($ordre, $anglesDroits, $cotesEgaux, $cotesPara) {
        if ($ordre == 3) {
            if ($cotesPara != 0) {
                return false;
            } else {
                if ($anglesDroits == 0) {
                    if ($cotesEgaux == 0) {
                        return "Triangle quelconque";
                    } elseif ($cotesEgaux == 2) {
                        return "Triangle isocèle";
                    } elseif ($cotesEgaux == 3) {
                        return "Triangle équilatéral";
                    } else {
                        return false;
                    }
                } elseif ($anglesDroits == 1) {
                    if ($cotesEgaux == 0) {
                        return "Triangle rectangle quelconque";
                    } elseif ($cotesEgaux == 2) {
                        return "Triangle rectangle isocèle";
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            }
        } elseif ($ordre == 4) {
            if ($anglesDroits == 0) {
                if ($cotesEgaux == 0) {
                    if ($cotesPara == 0) {
                        return "Quadrilatère quelconque";
                    } elseif ($cotesPara == 2) {
                        return "Trapèze";
                    } else {
                        return false;
                    }
                } elseif ($cotesEgaux == 2) {
                    if ($cotesPara == 0) {
                        return "Quadrilatère quelconque";
                    } else {
                        return false;
                    }
                } elseif ($cotesEgaux == 4) {
                    if ($cotesPara == 4) {
                        return "Losange";
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            } elseif ($anglesDroits == 1) {
                if ($cotesEgaux == 0) {
                    if ($cotesPara == 0) {
                        return "Quadrilatère quelconque";
                    } elseif ($cotesPara == 2) {
                        return "Trapèze";
                    } elseif ($cotesPara == 4) {
                        return "Rectangle";
                    } else {
                        return false;
                    }
                } elseif ($cotesEgaux == 2) {
                    if ($cotesPara == 0) {
                        return "Quadrilatère quelconque";
                    } else {
                        return false;
                    }
                } elseif ($cotesEgaux == 3 || $cotesEgaux == 4) {
                    return "Losange";
                } else {
                    return false;
                }
            } elseif ($anglesDroits == 2) {
                if ($cotesEgaux == 2) {
                    if ($cotesPara == 2) {
                        return "Quadrilatère quelconque";
                    } elseif ($cotesPara == 4) {
                        return "Rectangle";
                    } else {
                        return false;
                    }
                } elseif ($cotesEgaux == 3 || $cotesEgaux == 4) {
                    return "Carré";
                } else {
                    return false;
                }
            } elseif ($anglesDroits == 3 || $anglesDroits == 4) {
                if ($cotesEgaux == 2) {
                    return "Rectangle";
                } elseif ($cotesEgaux == 4) {
                    return "Carré";
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } elseif ($ordre == 5) {
            if ($cotesEgaux >= 0 && $cotesEgaux < 5) {
                return "Pentagone quelconque";
            } elseif ($cotesEgaux == 5) {
                return "Pentagone régulier";
            } else {
                return false;
            }
        } else {
            return false;
        }
        return false;
    }

}