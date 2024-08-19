<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $first_lname
 * @property string|null $second_lname
 * @property string $full_name
 * @property string|null $alias
 * @property string $slug
 * @property string $gender
 * @property string $phone
 * @property string|null $adress
 * @property int|null $zip_code
 * @property string $dni
 * @property string|null $ss
 * @property int $municipio_id
 * @property string $birthdate
 * @property int $study_id
 * @property int $hair_color_id
 * @property int $eye_color_id
 * @property int $race_id
 * @property int $has_car
 * @property int $is_disabled
 * @property int $height
 * @property int $pant_size_id
 * @property int $shirt_size_id
 * @property int $shoe_size_id
 * @property string|null $skills
 * @property int $is_extra
 * @property string|null $url_book
 * @property int $availability_id
 * @property int $has_tattoos
 * @property int $is_retired
 * @property int $removed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Image> $images
 * @property-read int|null $images_count
 * @method static \Illuminate\Database\Eloquent\Builder|Actor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Actor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Actor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereAdress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereAvailabilityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereDni($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereEyeColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereFirstLname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereHairColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereHasCar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereHasTattoos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereIsDisabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereIsExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereIsRetired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereMunicipioId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor wherePantSizeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereRaceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereRemoved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereSecondLname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereShirtSizeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereShoeSizeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereSkills($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereSs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereStudyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereUrlBook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Actor whereZipCode($value)
 */
	class Actor extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $availability
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Actor> $actors
 * @property-read int|null $actors_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Xtra> $xtras
 * @property-read int|null $xtras_count
 * @method static \Illuminate\Database\Eloquent\Builder|Availability newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Availability newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Availability query()
 * @method static \Illuminate\Database\Eloquent\Builder|Availability whereAvailability($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Availability whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Availability whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Availability whereUpdatedAt($value)
 */
	class Availability extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $provincia
 * @property int $ca_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Provincia> $provincias
 * @property-read int|null $provincias_count
 * @method static \Illuminate\Database\Eloquent\Builder|Ca newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ca newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ca query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ca whereCaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ca whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ca whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ca whereProvincia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ca whereUpdatedAt($value)
 */
	class Ca extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $first_lname
 * @property string|null $second_lname
 * @property string $full_name
 * @property string $slug
 * @property string $gender
 * @property string $phone
 * @property string|null $adress
 * @property int $zip_code
 * @property string $dni
 * @property string|null $ss
 * @property int $municipio_id
 * @property string $birthdate
 * @property int $experience
 * @property int $has_car
 * @property int $move_to_work_id
 * @property int $removed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Image> $images
 * @property-read int|null $images_count
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator query()
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator whereAdress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator whereDni($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator whereExperience($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator whereFirstLname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator whereHasCar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator whereMoveToWorkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator whereMunicipioId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator whereRemoved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator whereSecondLname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator whereSs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coordinator whereZipCode($value)
 */
	class Coordinator extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $color
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Actor> $actors
 * @property-read int|null $actors_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Xtra> $xtras
 * @property-read int|null $xtras_count
 * @method static \Illuminate\Database\Eloquent\Builder|EyeColor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EyeColor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EyeColor query()
 * @method static \Illuminate\Database\Eloquent\Builder|EyeColor whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EyeColor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EyeColor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EyeColor whereUpdatedAt($value)
 */
	class EyeColor extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $color
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Actor> $actors
 * @property-read int|null $actors_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Xtra> $xtras
 * @property-read int|null $xtras_count
 * @method static \Illuminate\Database\Eloquent\Builder|HairColor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HairColor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HairColor query()
 * @method static \Illuminate\Database\Eloquent\Builder|HairColor whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HairColor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HairColor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HairColor whereUpdatedAt($value)
 */
	class HairColor extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $url
 * @property int $is_avatar
 * @property int $imageable_id
 * @property string $imageable_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $imageable
 * @method static \Illuminate\Database\Eloquent\Builder|Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image query()
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereImageableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereImageableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereIsAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereUrl($value)
 */
	class Image extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $municipio
 * @property int $provincia_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Actor> $actors
 * @property-read int|null $actors_count
 * @property-read \App\Models\Provincia $provincia
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Xtra> $xtras
 * @property-read int|null $xtras_count
 * @method static \Illuminate\Database\Eloquent\Builder|Municipio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Municipio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Municipio query()
 * @method static \Illuminate\Database\Eloquent\Builder|Municipio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Municipio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Municipio whereMunicipio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Municipio whereProvinciaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Municipio whereUpdatedAt($value)
 */
	class Municipio extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $size
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Actor> $actors
 * @property-read int|null $actors_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Xtra> $xtras
 * @property-read int|null $xtras_count
 * @method static \Illuminate\Database\Eloquent\Builder|PantSize newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PantSize newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PantSize query()
 * @method static \Illuminate\Database\Eloquent\Builder|PantSize whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PantSize whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PantSize whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PantSize whereUpdatedAt($value)
 */
	class PantSize extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $provincia
 * @property int $ca_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ca $ca
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Municipio> $municipios
 * @property-read int|null $municipios_count
 * @method static \Illuminate\Database\Eloquent\Builder|Provincia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Provincia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Provincia query()
 * @method static \Illuminate\Database\Eloquent\Builder|Provincia whereCaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Provincia whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Provincia whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Provincia whereProvincia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Provincia whereUpdatedAt($value)
 */
	class Provincia extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $race
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Actor> $actors
 * @property-read int|null $actors_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Xtra> $xtras
 * @property-read int|null $xtras_count
 * @method static \Illuminate\Database\Eloquent\Builder|Race newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Race newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Race query()
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereRace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereUpdatedAt($value)
 */
	class Race extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $size
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Actor> $actors
 * @property-read int|null $actors_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Xtra> $xtras
 * @property-read int|null $xtras_count
 * @method static \Illuminate\Database\Eloquent\Builder|ShirtSize newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShirtSize newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShirtSize query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShirtSize whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShirtSize whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShirtSize whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShirtSize whereUpdatedAt($value)
 */
	class ShirtSize extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $size
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Actor> $actors
 * @property-read int|null $actors_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Xtra> $xtras
 * @property-read int|null $xtras_count
 * @method static \Illuminate\Database\Eloquent\Builder|ShoeSize newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShoeSize newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShoeSize query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShoeSize whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShoeSize whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShoeSize whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShoeSize whereUpdatedAt($value)
 */
	class ShoeSize extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $first_lname
 * @property string|null $second_lname
 * @property string $full_name
 * @property string|null $alias
 * @property string $slug
 * @property string $gender
 * @property string $phone
 * @property string|null $adress
 * @property int|null $zip_code
 * @property string $dni
 * @property string|null $ss
 * @property int $municipio_id
 * @property string $birthdate
 * @property int $study_id
 * @property int $hair_color_id
 * @property int $eye_color_id
 * @property int $race_id
 * @property int $has_car
 * @property int $is_disabled
 * @property int $height
 * @property int $pant_size_id
 * @property int $shirt_size_id
 * @property int $shoe_size_id
 * @property string|null $skills
 * @property int $is_extra
 * @property string|null $url_book
 * @property int $availability_id
 * @property int $has_tattoos
 * @property int $is_retired
 * @property int $removed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Image> $images
 * @property-read int|null $images_count
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra query()
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereAdress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereAvailabilityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereDni($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereEyeColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereFirstLname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereHairColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereHasCar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereHasTattoos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereIsDisabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereIsExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereIsRetired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereMunicipioId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra wherePantSizeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereRaceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereRemoved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereSecondLname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereShirtSizeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereShoeSizeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereSkills($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereSs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereStudyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereUrlBook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Xtra whereZipCode($value)
 */
	class Xtra extends \Eloquent {}
}

