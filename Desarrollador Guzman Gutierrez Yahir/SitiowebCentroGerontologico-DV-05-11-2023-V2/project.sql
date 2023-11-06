-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2023 a las 03:34:52
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `project`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_01_13_092008_create_sessions_table', 1),
(7, '2021_01_14_094956_create_roles_table', 1),
(8, '2021_01_14_095021_add_roles_fields_to_users_table', 1),
(10, '2023_10_11_020318_add_columns_to_users_table', 2),
(12, '2023_10_13_031146_create_talleres_table', 3),
(13, '2023_10_28_231216_add_user_id_to_servicios_table', 4),
(14, '2023_10_28_232350_create_servicios_table', 5),
(15, '2023_10_28_234312_create_servicios_registrados_table', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', '2023-09-28 09:33:35', '2023-09-28 09:33:35'),
(2, 'Doctor', '2023-09-28 09:33:35', '2023-09-28 09:33:35'),
(3, 'Adulto_Mayor', '2023-09-28 09:33:35', '2023-09-28 09:33:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombreServicio` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombreServicio`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Atención médica', 10, NULL, NULL),
(2, 'Fisioterapia', 5, NULL, NULL),
(3, 'Psicología', 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_registrados`
--

CREATE TABLE `servicios_registrados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `nombreServicio` bigint(20) UNSIGNED NOT NULL,
  `fecha_hora_servicio` datetime DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios_registrados`
--

INSERT INTO `servicios_registrados` (`id`, `doctor_id`, `nombreServicio`, `fecha_hora_servicio`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 10, 1, '2023-11-05 22:36:00', 12, '2023-11-03 03:24:24', '2023-11-04 10:36:58'),
(8, 5, 2, '2023-11-04 00:23:00', 15, '2023-11-03 03:24:24', '2023-11-04 23:23:43'),
(9, 9, 3, '2023-11-05 01:26:00', 16, '2023-11-03 03:24:25', '2023-11-04 23:26:44'),
(10, 10, 1, '2023-11-04 00:30:00', 18, '2023-11-04 06:03:53', '2023-11-04 10:31:23'),
(11, 5, 2, NULL, 19, '2023-11-04 06:03:53', '2023-11-04 06:03:53'),
(12, 9, 3, NULL, 22, '2023-11-04 06:03:53', '2023-11-04 06:03:53'),
(13, 10, 1, NULL, 23, '2023-11-04 06:03:53', '2023-11-04 23:13:55'),
(16, 5, 2, NULL, 24, '2023-11-04 09:54:50', '2023-11-04 09:54:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('MGXWyMADnuBUvbM6QQseellzEkhED9URdQA5hb1Q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWkZrQndWY3JlVkdFdkNOWGx0MVF0UWQ5S2hTanZMTnQ1cEtTMFI3WCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1699151678);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `number_phoneViejito` varchar(255) DEFAULT NULL,
  `viejito_address` varchar(255) DEFAULT NULL,
  `name_tutor` varchar(255) DEFAULT NULL,
  `number_phoneTutor` varchar(255) DEFAULT NULL,
  `taller1` varchar(255) DEFAULT NULL,
  `taller2` varchar(255) DEFAULT NULL,
  `taller3` varchar(255) DEFAULT NULL,
  `servicio` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `role_id`, `number_phoneViejito`, `viejito_address`, `name_tutor`, `number_phoneTutor`, `taller1`, `taller2`, `taller3`, `servicio`) VALUES
(1, 'Administrador', 'admin@gmail.com', NULL, '$2y$10$g840u7cXn0B4lgI5KdIvNO15YENWQIrRfDi8iRWBZLT0Fp.MVcWYe', NULL, NULL, NULL, NULL, NULL, '2023-09-28 10:04:35', '2023-10-02 06:24:34', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Doctor2', 'doctor2@gmail.com', NULL, '$2y$10$qpb21Hejwsi.YiK310YuKe6qxZ9lrcNhXFX2ECclAbCDKqU02wm6i', NULL, NULL, NULL, NULL, NULL, '2023-09-28 10:15:52', '2023-10-19 07:29:44', 3, '12345678', 'Portezuelo', 'Yahir', '12345678', NULL, NULL, NULL, NULL),
(9, 'Doctor3', 'doctor3@gmail.com', NULL, '$2y$10$g.I5asU3v658WgzqJRs3M.WPWFU7QCyzwnjDUEJ8q/FTfspArRqLu', NULL, NULL, NULL, NULL, NULL, '2023-09-28 10:42:44', '2023-10-19 07:32:13', 3, NULL, 'Portezuelo', 'Yahir', '1234567890', NULL, NULL, NULL, NULL),
(10, 'Doctor1', 'doctor@gmail.com', NULL, '$2y$10$oBFzt.pfWd817XnAt1NDiOM0gl6zd9HHfqkQw8GHV3dxRdnNPL7zK', NULL, NULL, NULL, NULL, NULL, '2023-09-28 10:43:33', '2023-10-02 06:26:58', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Yahir', 'yguzgtz@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-07 23:40:04', '2023-11-05 06:19:06', 2, '7721512785', 'El carmen', 'Julio', '1234567890', 'cocina', 'danza', NULL, NULL),
(15, 'Juan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-12 11:25:21', '2023-10-23 05:45:53', 2, '7721512786', 'Portezuelo', 'Pedro', '1234567891', NULL, 'danza', 'papelnono', NULL),
(16, 'Ismael', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-14 01:04:59', '2023-11-04 23:15:07', 2, '7721194003', 'El carmen', 'Ibeth', '7721121777', NULL, 'danza', 'papelnono', NULL),
(18, 'Daniel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-20 22:14:01', '2023-11-05 00:36:34', 2, '7721597174', 'Ixmiquilpan', 'Ismael', '7721512785', NULL, NULL, 'papelnono', NULL),
(19, 'Pedro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-20 22:20:26', '2023-10-20 22:20:26', 2, '7777777777', 'Carmen', 'Yahir', '7721512785', NULL, NULL, 'papelnono', NULL),
(22, 'Maria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-23 04:16:41', '2023-10-29 04:10:05', 2, '7727496182', 'Portezuelo2', 'Edgar', '7721512785', 'cocina', 'danza', 'papelnono', NULL),
(23, 'Alfredo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-23 21:55:01', '2023-10-23 21:55:53', 2, '7721597172', 'Portezuelo', 'Yahir', '7721512785', 'cocina', 'danza', 'papelnono', NULL),
(24, 'luis angel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-27 22:05:31', '2023-10-27 22:06:11', 2, '7721247411', 'ixmiquilpan', 'Miriam', '7721345690', 'cocina', 'danza', 'papelnono', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servicios_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `servicios_registrados`
--
ALTER TABLE `servicios_registrados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servicios_registrados_doctor_id_foreign` (`doctor_id`),
  ADD KEY `servicios_registrados_nombreservicio_foreign` (`nombreServicio`),
  ADD KEY `servicios_registrados_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicios_registrados`
--
ALTER TABLE `servicios_registrados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `servicios_registrados`
--
ALTER TABLE `servicios_registrados`
  ADD CONSTRAINT `servicios_registrados_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `servicios_registrados_nombreservicio_foreign` FOREIGN KEY (`nombreServicio`) REFERENCES `servicios` (`id`),
  ADD CONSTRAINT `servicios_registrados_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
