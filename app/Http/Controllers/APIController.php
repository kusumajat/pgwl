<?php

namespace App\Http\Controllers;

use App\Models\PointsModel;
use Illuminate\Http\Request;
use App\Models\PolygonsModel;
use App\Models\PolylinesModel;

class APIController extends Controller
{
    public function __construct()
    {
        $this->points = new PointsModel();
        $this->polylines = new PolylinesModel();
        $this->polygons = new PolygonsModel();
    }

    public function points()
    {
        $points = $this->points->geojson_points();
        return response()->json($points);
    }

    public function point($id)
    {
        $point = $this->points->geojson_point($id);
        return response()->json($point);
    }

    public function polylines()
    {
        $polylines = $this->polylines->geojson_polylines();
        return response()->json($polylines, 200, [], JSON_NUMERIC_CHECK);
    }
    public function polyline($id)
    {
        $polyline = $this->polylines->geojson_polyline($id);
        return response()->json($polyline, 200, [], JSON_NUMERIC_CHECK);
    }

    public function polygons()
    {
        $polygons = $this->polygons->geojson_polygons();
        return response()->json($polygons);
    }

    public function polygon($id)
    {
        $polygon = $this->polygons->geojson_polygon($id);
        return response()->json($polygon);
    }
}
