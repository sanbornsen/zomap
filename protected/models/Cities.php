<?php

/**
 * This is the model class for table "cities".
 *
 * The followings are the available columns in table 'cities':
 * @property integer $city_id
 * @property string $name
 * @property string $name_hi
 * @property integer $display_order
 * @property integer $default_language_id
 * @property integer $language_id
 * @property integer $country_id
 * @property string $std_code
 * @property string $url
 * @property integer $active_flag
 * @property integer $has_restaurants
 * @property integer $has_nightlife
 * @property integer $has_chillout
 * @property integer $has_takeaway
 * @property integer $has_cafes
 * @property integer $has_events
 * @property integer $has_45_star
 * @property integer $has_dish_search
 * @property integer $has_postcode_search
 * @property integer $filter_luxury_dining
 * @property integer $filter_michelin_starred
 * @property integer $has_catering
 * @property string $latitude
 * @property string $longitude
 * @property string $distance_unit
 * @property string $search_radius
 * @property integer $citibank_discount_flag
 * @property integer $emirates_discount_flag
 * @property integer $show_zones
 * @property string $cft_ranges
 * @property string $cft_ranges_web
 * @property string $cft_round_off
 * @property integer $menus_active_flag
 * @property integer $photos_active_flag
 * @property integer $reviews_active_flag
 * @property integer $maps_active_flag
 * @property string $review_alert_email
 * @property string $qc_email
 * @property integer $filter_veg
 * @property integer $filter_serves_veg
 * @property integer $filter_non_veg
 * @property integer $show_non_veg
 * @property integer $filter_credit_cards
 * @property integer $filter_buffet
 * @property integer $filter_happy_hours
 * @property integer $filter_wifi
 * @property integer $filter_breakfast
 * @property integer $filter_bar
 * @property integer $filter_no_bar
 * @property integer $filter_live_music
 * @property integer $filter_outdoor_seating
 * @property integer $filter_has_events
 * @property integer $filter_sheesha
 * @property integer $filter_halal
 * @property integer $filter_friday_brunch
 * @property integer $filter_sunday_brunch
 * @property integer $filter_weekend_brunch
 * @property integer $filter_sports_bar
 * @property integer $check_cookie_flag
 * @property integer $acd_active_flag
 * @property integer $filter_desserts_bakes
 * @property integer $rooftop_flag
 * @property integer $afternoon_tea_flag
 * @property integer $cafe_flag
 * @property integer $quick_bites_flag
 * @property integer $filter_wishlist
 * @property integer $filter_pet_friendly
 * @property integer $filter_cheap_eats
 * @property integer $filter_vineyard
 * @property integer $filter_seaside
 * @property integer $has_collections
 */
class Cities extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cities';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, name_hi, display_order, country_id, std_code, url, has_restaurants, has_chillout, has_takeaway, has_cafes, has_events, has_45_star, has_dish_search, has_postcode_search, citibank_discount_flag, emirates_discount_flag, show_zones, cft_ranges, cft_ranges_web, menus_active_flag, photos_active_flag, reviews_active_flag, maps_active_flag, qc_email, filter_veg, filter_serves_veg, show_non_veg, filter_credit_cards, filter_buffet, filter_happy_hours, filter_wifi, filter_breakfast, filter_bar, filter_no_bar, filter_live_music, filter_outdoor_seating, filter_has_events, filter_sheesha, filter_halal, filter_friday_brunch, filter_sunday_brunch, filter_sports_bar, acd_active_flag, filter_desserts_bakes, rooftop_flag, afternoon_tea_flag, quick_bites_flag, filter_cheap_eats, filter_vineyard', 'required'),
			array('display_order, default_language_id, language_id, country_id, active_flag, has_restaurants, has_nightlife, has_chillout, has_takeaway, has_cafes, has_events, has_45_star, has_dish_search, has_postcode_search, filter_luxury_dining, filter_michelin_starred, has_catering, citibank_discount_flag, emirates_discount_flag, show_zones, menus_active_flag, photos_active_flag, reviews_active_flag, maps_active_flag, filter_veg, filter_serves_veg, filter_non_veg, show_non_veg, filter_credit_cards, filter_buffet, filter_happy_hours, filter_wifi, filter_breakfast, filter_bar, filter_no_bar, filter_live_music, filter_outdoor_seating, filter_has_events, filter_sheesha, filter_halal, filter_friday_brunch, filter_sunday_brunch, filter_weekend_brunch, filter_sports_bar, check_cookie_flag, acd_active_flag, filter_desserts_bakes, rooftop_flag, afternoon_tea_flag, cafe_flag, quick_bites_flag, filter_wishlist, filter_pet_friendly, filter_cheap_eats, filter_vineyard, filter_seaside, has_collections', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>20),
			array('name_hi, qc_email', 'length', 'max'=>50),
			array('std_code', 'length', 'max'=>8),
			array('url', 'length', 'max'=>16),
			array('latitude, longitude', 'length', 'max'=>14),
			array('distance_unit', 'length', 'max'=>2),
			array('search_radius, cft_round_off', 'length', 'max'=>5),
			array('cft_ranges', 'length', 'max'=>500),
			array('review_alert_email', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('city_id, name, name_hi, display_order, default_language_id, language_id, country_id, std_code, url, active_flag, has_restaurants, has_nightlife, has_chillout, has_takeaway, has_cafes, has_events, has_45_star, has_dish_search, has_postcode_search, filter_luxury_dining, filter_michelin_starred, has_catering, latitude, longitude, distance_unit, search_radius, citibank_discount_flag, emirates_discount_flag, show_zones, cft_ranges, cft_ranges_web, cft_round_off, menus_active_flag, photos_active_flag, reviews_active_flag, maps_active_flag, review_alert_email, qc_email, filter_veg, filter_serves_veg, filter_non_veg, show_non_veg, filter_credit_cards, filter_buffet, filter_happy_hours, filter_wifi, filter_breakfast, filter_bar, filter_no_bar, filter_live_music, filter_outdoor_seating, filter_has_events, filter_sheesha, filter_halal, filter_friday_brunch, filter_sunday_brunch, filter_weekend_brunch, filter_sports_bar, check_cookie_flag, acd_active_flag, filter_desserts_bakes, rooftop_flag, afternoon_tea_flag, cafe_flag, quick_bites_flag, filter_wishlist, filter_pet_friendly, filter_cheap_eats, filter_vineyard, filter_seaside, has_collections', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'city_id' => 'City',
			'name' => 'Name',
			'name_hi' => 'Name Hi',
			'display_order' => 'Display Order',
			'default_language_id' => 'Default Language',
			'language_id' => 'Language',
			'country_id' => 'Country',
			'std_code' => 'Std Code',
			'url' => 'Url',
			'active_flag' => 'Active Flag',
			'has_restaurants' => 'Has Restaurants',
			'has_nightlife' => 'Has Nightlife',
			'has_chillout' => 'Has Chillout',
			'has_takeaway' => 'Has Takeaway',
			'has_cafes' => 'Has Cafes',
			'has_events' => 'Has Events',
			'has_45_star' => 'Has 45 Star',
			'has_dish_search' => 'Has Dish Search',
			'has_postcode_search' => 'Has Postcode Search',
			'filter_luxury_dining' => 'Filter Luxury Dining',
			'filter_michelin_starred' => 'Filter Michelin Starred',
			'has_catering' => 'Has Catering',
			'latitude' => 'Latitude',
			'longitude' => 'Longitude',
			'distance_unit' => 'Distance Unit',
			'search_radius' => 'Search Radius',
			'citibank_discount_flag' => 'Citibank Discount Flag',
			'emirates_discount_flag' => 'Emirates Discount Flag',
			'show_zones' => 'Show Zones',
			'cft_ranges' => 'Cft Ranges',
			'cft_ranges_web' => 'Cft Ranges Web',
			'cft_round_off' => 'Cft Round Off',
			'menus_active_flag' => 'Menus Active Flag',
			'photos_active_flag' => 'Photos Active Flag',
			'reviews_active_flag' => 'Reviews Active Flag',
			'maps_active_flag' => 'Maps Active Flag',
			'review_alert_email' => 'Review Alert Email',
			'qc_email' => 'Qc Email',
			'filter_veg' => 'Filter Veg',
			'filter_serves_veg' => 'Filter Serves Veg',
			'filter_non_veg' => 'Filter Non Veg',
			'show_non_veg' => 'Show Non Veg',
			'filter_credit_cards' => 'Filter Credit Cards',
			'filter_buffet' => 'Filter Buffet',
			'filter_happy_hours' => 'Filter Happy Hours',
			'filter_wifi' => 'Filter Wifi',
			'filter_breakfast' => 'Filter Breakfast',
			'filter_bar' => 'Filter Bar',
			'filter_no_bar' => 'Filter No Bar',
			'filter_live_music' => 'Filter Live Music',
			'filter_outdoor_seating' => 'Filter Outdoor Seating',
			'filter_has_events' => 'Filter Has Events',
			'filter_sheesha' => 'Filter Sheesha',
			'filter_halal' => 'Filter Halal',
			'filter_friday_brunch' => 'Filter Friday Brunch',
			'filter_sunday_brunch' => 'Filter Sunday Brunch',
			'filter_weekend_brunch' => 'Filter Weekend Brunch',
			'filter_sports_bar' => 'Filter Sports Bar',
			'check_cookie_flag' => 'Check Cookie Flag',
			'acd_active_flag' => 'Acd Active Flag',
			'filter_desserts_bakes' => 'Filter Desserts Bakes',
			'rooftop_flag' => 'Rooftop Flag',
			'afternoon_tea_flag' => 'Afternoon Tea Flag',
			'cafe_flag' => 'Cafe Flag',
			'quick_bites_flag' => 'Quick Bites Flag',
			'filter_wishlist' => 'Filter Wishlist',
			'filter_pet_friendly' => 'Filter Pet Friendly',
			'filter_cheap_eats' => 'Filter Cheap Eats',
			'filter_vineyard' => 'Filter Vineyard',
			'filter_seaside' => 'Filter Seaside',
			'has_collections' => 'Has Collections',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('city_id',$this->city_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('name_hi',$this->name_hi,true);
		$criteria->compare('display_order',$this->display_order);
		$criteria->compare('default_language_id',$this->default_language_id);
		$criteria->compare('language_id',$this->language_id);
		$criteria->compare('country_id',$this->country_id);
		$criteria->compare('std_code',$this->std_code,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('active_flag',$this->active_flag);
		$criteria->compare('has_restaurants',$this->has_restaurants);
		$criteria->compare('has_nightlife',$this->has_nightlife);
		$criteria->compare('has_chillout',$this->has_chillout);
		$criteria->compare('has_takeaway',$this->has_takeaway);
		$criteria->compare('has_cafes',$this->has_cafes);
		$criteria->compare('has_events',$this->has_events);
		$criteria->compare('has_45_star',$this->has_45_star);
		$criteria->compare('has_dish_search',$this->has_dish_search);
		$criteria->compare('has_postcode_search',$this->has_postcode_search);
		$criteria->compare('filter_luxury_dining',$this->filter_luxury_dining);
		$criteria->compare('filter_michelin_starred',$this->filter_michelin_starred);
		$criteria->compare('has_catering',$this->has_catering);
		$criteria->compare('latitude',$this->latitude,true);
		$criteria->compare('longitude',$this->longitude,true);
		$criteria->compare('distance_unit',$this->distance_unit,true);
		$criteria->compare('search_radius',$this->search_radius,true);
		$criteria->compare('citibank_discount_flag',$this->citibank_discount_flag);
		$criteria->compare('emirates_discount_flag',$this->emirates_discount_flag);
		$criteria->compare('show_zones',$this->show_zones);
		$criteria->compare('cft_ranges',$this->cft_ranges,true);
		$criteria->compare('cft_ranges_web',$this->cft_ranges_web,true);
		$criteria->compare('cft_round_off',$this->cft_round_off,true);
		$criteria->compare('menus_active_flag',$this->menus_active_flag);
		$criteria->compare('photos_active_flag',$this->photos_active_flag);
		$criteria->compare('reviews_active_flag',$this->reviews_active_flag);
		$criteria->compare('maps_active_flag',$this->maps_active_flag);
		$criteria->compare('review_alert_email',$this->review_alert_email,true);
		$criteria->compare('qc_email',$this->qc_email,true);
		$criteria->compare('filter_veg',$this->filter_veg);
		$criteria->compare('filter_serves_veg',$this->filter_serves_veg);
		$criteria->compare('filter_non_veg',$this->filter_non_veg);
		$criteria->compare('show_non_veg',$this->show_non_veg);
		$criteria->compare('filter_credit_cards',$this->filter_credit_cards);
		$criteria->compare('filter_buffet',$this->filter_buffet);
		$criteria->compare('filter_happy_hours',$this->filter_happy_hours);
		$criteria->compare('filter_wifi',$this->filter_wifi);
		$criteria->compare('filter_breakfast',$this->filter_breakfast);
		$criteria->compare('filter_bar',$this->filter_bar);
		$criteria->compare('filter_no_bar',$this->filter_no_bar);
		$criteria->compare('filter_live_music',$this->filter_live_music);
		$criteria->compare('filter_outdoor_seating',$this->filter_outdoor_seating);
		$criteria->compare('filter_has_events',$this->filter_has_events);
		$criteria->compare('filter_sheesha',$this->filter_sheesha);
		$criteria->compare('filter_halal',$this->filter_halal);
		$criteria->compare('filter_friday_brunch',$this->filter_friday_brunch);
		$criteria->compare('filter_sunday_brunch',$this->filter_sunday_brunch);
		$criteria->compare('filter_weekend_brunch',$this->filter_weekend_brunch);
		$criteria->compare('filter_sports_bar',$this->filter_sports_bar);
		$criteria->compare('check_cookie_flag',$this->check_cookie_flag);
		$criteria->compare('acd_active_flag',$this->acd_active_flag);
		$criteria->compare('filter_desserts_bakes',$this->filter_desserts_bakes);
		$criteria->compare('rooftop_flag',$this->rooftop_flag);
		$criteria->compare('afternoon_tea_flag',$this->afternoon_tea_flag);
		$criteria->compare('cafe_flag',$this->cafe_flag);
		$criteria->compare('quick_bites_flag',$this->quick_bites_flag);
		$criteria->compare('filter_wishlist',$this->filter_wishlist);
		$criteria->compare('filter_pet_friendly',$this->filter_pet_friendly);
		$criteria->compare('filter_cheap_eats',$this->filter_cheap_eats);
		$criteria->compare('filter_vineyard',$this->filter_vineyard);
		$criteria->compare('filter_seaside',$this->filter_seaside);
		$criteria->compare('has_collections',$this->has_collections);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cities the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
