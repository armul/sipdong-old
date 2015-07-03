<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<w:document xmlns:wpc="http://schemas.microsoft.com/office/word/2010/wordprocessingCanvas" xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:wp14="http://schemas.microsoft.com/office/word/2010/wordprocessingDrawing" xmlns:wp="http://schemas.openxmlformats.org/drawingml/2006/wordprocessingDrawing" xmlns:w10="urn:schemas-microsoft-com:office:word" xmlns:w="http://schemas.openxmlformats.org/wordprocessingml/2006/main" xmlns:w14="http://schemas.microsoft.com/office/word/2010/wordml" xmlns:wpg="http://schemas.microsoft.com/office/word/2010/wordprocessingGroup" xmlns:wpi="http://schemas.microsoft.com/office/word/2010/wordprocessingInk" xmlns:wne="http://schemas.microsoft.com/office/word/2006/wordml" xmlns:wps="http://schemas.microsoft.com/office/word/2010/wordprocessingShape" mc:Ignorable="w14 wp14">
			<w:body>
				<xsl:for-each select="LabelLHP/Halaman">
					<w:tbl>
						<w:tblPr>
							<w:tblStyle w:val="TableGrid"/>
							<w:tblW w:w="0" w:type="auto"/>
							<w:jc w:val="right"/>
							<w:tblBorders>
								<w:top w:val="none" w:sz="0" w:space="0" w:color="auto"/>
								<w:left w:val="none" w:sz="0" w:space="0" w:color="auto"/>
								<w:bottom w:val="none" w:sz="0" w:space="0" w:color="auto"/>
								<w:right w:val="none" w:sz="0" w:space="0" w:color="auto"/>
								<w:insideH w:val="none" w:sz="0" w:space="0" w:color="auto"/>
								<w:insideV w:val="none" w:sz="0" w:space="0" w:color="auto"/>
							</w:tblBorders>
							<w:tblLook w:val="04A0" w:firstRow="1" w:lastRow="0" w:firstColumn="1" w:lastColumn="0" w:noHBand="0" w:noVBand="1"/>
						</w:tblPr>
						<w:tblGrid>
							<w:gridCol w:w="8618"/>
						</w:tblGrid>
						<w:tr w:rsidR="00757F1A" w:rsidRPr="00507113" w:rsidTr="00142E7F">
							<w:trPr>
								<w:trHeight w:hRule="exact" w:val="5783"/>
								<w:jc w:val="right"/>
							</w:trPr>
							<w:tc>
								<w:tcPr>
									<w:tcW w:w="8618" w:type="dxa"/>
								</w:tcPr>
								<w:p w:rsidR="00507113" w:rsidRDefault="00507113" w:rsidP="00507113">
									<w:pPr>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
								</w:p>
								<w:p w:rsidR="00507113" w:rsidRDefault="00507113" w:rsidP="00507113">
									<w:pPr>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
								</w:p>
								<w:p w:rsidR="00507113" w:rsidRDefault="00507113" w:rsidP="00507113">
									<w:pPr>
										<w:jc w:val="center"/>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
									<w:r w:rsidRPr="00507113">
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
										<w:t><xsl:value-of select="Label1/NoLHP"/></w:t>
									</w:r>
								</w:p>
								<w:p w:rsidR="00507113" w:rsidRDefault="00507113" w:rsidP="00507113">
									<w:pPr>
										<w:jc w:val="center"/>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
									<w:r>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
										<w:t><xsl:value-of select="Label1/TglLHP"/></w:t>
									</w:r>
								</w:p>
								<w:p w:rsidR="00507113" w:rsidRDefault="00507113">
									<w:pPr>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
								</w:p>
								<w:p w:rsidR="00507113" w:rsidRPr="00507113" w:rsidRDefault="00507113">
									<w:pPr>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
								</w:p>
								<w:p w:rsidR="00757F1A" w:rsidRPr="00507113" w:rsidRDefault="00507113" w:rsidP="00507113">
									<w:pPr>
										<w:tabs>
											<w:tab w:val="left" w:pos="3294"/>
											<w:tab w:val="left" w:pos="3720"/>
										</w:tabs>
										<w:ind w:left="3720" w:right="146" w:hanging="3544"/>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
									<w:r w:rsidRPr="00507113">
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
										<w:t>Nama WP</w:t>
										<w:tab/>
										<w:t>:</w:t>
										<w:tab/>
										<w:t><xsl:value-of select="Label1/NamaWP"/></w:t>
									</w:r>
								</w:p>
								<w:p w:rsidR="00507113" w:rsidRPr="00507113" w:rsidRDefault="00507113" w:rsidP="00507113">
									<w:pPr>
										<w:tabs>
											<w:tab w:val="left" w:pos="3294"/>
											<w:tab w:val="left" w:pos="3720"/>
										</w:tabs>
										<w:ind w:left="3720" w:right="146" w:hanging="3544"/>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
									<w:r w:rsidRPr="00507113">
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
										<w:t>NPWP</w:t>
										<w:tab/>
										<w:t>:</w:t>
										<w:tab/>
										<w:t><xsl:value-of select="Label1/NPWP"/></w:t>
									</w:r>
								</w:p>
								<w:p w:rsidR="00507113" w:rsidRPr="00507113" w:rsidRDefault="00507113" w:rsidP="00507113">
									<w:pPr>
										<w:tabs>
											<w:tab w:val="left" w:pos="3294"/>
											<w:tab w:val="left" w:pos="3720"/>
										</w:tabs>
										<w:ind w:left="3720" w:right="146" w:hanging="3544"/>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
									<w:r w:rsidRPr="00507113">
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
										<w:t>Masa/Tahun Pajak</w:t>
										<w:tab/>
										<w:t>:</w:t>
										<w:tab/>
										<w:t><xsl:value-of select="Label1/MasaTahun"/></w:t>
									</w:r>
								</w:p>
								<w:p w:rsidR="00507113" w:rsidRPr="00507113" w:rsidRDefault="00507113" w:rsidP="00507113">
									<w:pPr>
										<w:tabs>
											<w:tab w:val="left" w:pos="3294"/>
											<w:tab w:val="left" w:pos="3720"/>
										</w:tabs>
										<w:ind w:left="3720" w:right="146" w:hanging="3544"/>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
									<w:r w:rsidRPr="00507113">
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
										<w:t>Jenis Pemeriksaan</w:t>
										<w:tab/>
										<w:t>:</w:t>
										<w:tab/>
										<w:t><xsl:value-of select="Label1/Pemeriksaan"/></w:t>
									</w:r>
								</w:p>
							</w:tc>
						</w:tr>
						<w:tr w:rsidR="00757F1A" w:rsidRPr="00507113" w:rsidTr="00142E7F">
							<w:trPr>
								<w:trHeight w:hRule="exact" w:val="170"/>
								<w:jc w:val="right"/>
							</w:trPr>
							<w:tc>
								<w:tcPr>
									<w:tcW w:w="8618" w:type="dxa"/>
								</w:tcPr>
								<w:p w:rsidR="00757F1A" w:rsidRPr="00507113" w:rsidRDefault="00757F1A">
									<w:pPr>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
								</w:p>
							</w:tc>
						</w:tr>
						<w:tr w:rsidR="00757F1A" w:rsidRPr="00507113" w:rsidTr="00142E7F">
							<w:trPr>
								<w:trHeight w:hRule="exact" w:val="5783"/>
								<w:jc w:val="right"/>
							</w:trPr>
							<w:tc>
								<w:tcPr>
									<w:tcW w:w="8618" w:type="dxa"/>
								</w:tcPr>
								<w:p w:rsidR="00507113" w:rsidRDefault="00507113" w:rsidP="00507113">
									<w:pPr>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
								</w:p>
								<w:p w:rsidR="00507113" w:rsidRDefault="00507113" w:rsidP="00507113">
									<w:pPr>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
								</w:p>
								<w:p w:rsidR="00507113" w:rsidRDefault="00507113" w:rsidP="00507113">
									<w:pPr>
										<w:jc w:val="center"/>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
									<w:r w:rsidRPr="00507113">
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
										<w:t><xsl:value-of select="Label2/NoLHP"/></w:t>
									</w:r>
								</w:p>
								<w:p w:rsidR="00507113" w:rsidRPr="00507113" w:rsidRDefault="00507113" w:rsidP="00507113">
									<w:pPr>
										<w:jc w:val="center"/>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
									<w:r w:rsidRPr="00507113">
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
										<w:t><xsl:value-of select="Label2/TglLHP"/></w:t>
									</w:r>
								</w:p>
								<w:p w:rsidR="00507113" w:rsidRDefault="00507113" w:rsidP="00507113">
									<w:pPr>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
								</w:p>
								<w:p w:rsidR="00507113" w:rsidRPr="00507113" w:rsidRDefault="00507113" w:rsidP="00507113">
									<w:pPr>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
								</w:p>
								<w:p w:rsidR="00507113" w:rsidRPr="00507113" w:rsidRDefault="00507113" w:rsidP="00507113">
									<w:pPr>
										<w:tabs>
											<w:tab w:val="left" w:pos="3294"/>
											<w:tab w:val="left" w:pos="3720"/>
										</w:tabs>
										<w:ind w:left="3720" w:right="146" w:hanging="3544"/>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
									<w:r w:rsidRPr="00507113">
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
										<w:t>Nama WP</w:t>
										<w:tab/>
										<w:t>:</w:t>
										<w:tab/>
										<w:t><xsl:value-of select="Label2/NamaWP"/></w:t>
									</w:r>
								</w:p>
								<w:p w:rsidR="00507113" w:rsidRPr="00507113" w:rsidRDefault="00507113" w:rsidP="00507113">
									<w:pPr>
										<w:tabs>
											<w:tab w:val="left" w:pos="3294"/>
											<w:tab w:val="left" w:pos="3720"/>
										</w:tabs>
										<w:ind w:left="3720" w:right="146" w:hanging="3544"/>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
									<w:r w:rsidRPr="00507113">
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
										<w:t>NPWP</w:t>
										<w:tab/>
										<w:t>:</w:t>
										<w:tab/>
										<w:t><xsl:value-of select="Label2/NPWP"/></w:t>
									</w:r>
								</w:p>
								<w:p w:rsidR="00507113" w:rsidRPr="00507113" w:rsidRDefault="00507113" w:rsidP="00507113">
									<w:pPr>
										<w:tabs>
											<w:tab w:val="left" w:pos="3294"/>
											<w:tab w:val="left" w:pos="3720"/>
										</w:tabs>
										<w:ind w:left="3720" w:right="146" w:hanging="3544"/>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
									<w:r w:rsidRPr="00507113">
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
										<w:t>Masa/Tahun Pajak</w:t>
										<w:tab/>
										<w:t>:</w:t>
										<w:tab/>
										<w:t><xsl:value-of select="Label2/MasaTahun"/></w:t>
									</w:r>
								</w:p>
								<w:p w:rsidR="00757F1A" w:rsidRPr="00507113" w:rsidRDefault="00507113" w:rsidP="00507113">
									<w:pPr>
										<w:tabs>
											<w:tab w:val="left" w:pos="3294"/>
											<w:tab w:val="left" w:pos="3720"/>
										</w:tabs>
										<w:ind w:left="3720" w:right="146" w:hanging="3544"/>
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
									</w:pPr>
									<w:r w:rsidRPr="00507113">
										<w:rPr>
											<w:rFonts w:ascii="Exotc350 Bd BT" w:hAnsi="Exotc350 Bd BT"/>
											<w:sz w:val="40"/>
											<w:szCs w:val="40"/>
										</w:rPr>
										<w:t>Jenis Pemeriksaan</w:t>
										<w:tab/>
										<w:t>:</w:t>
										<w:tab/>
										<w:t><xsl:value-of select="Label2/Pemeriksaan"/></w:t>
									</w:r>
								</w:p>
							</w:tc>
						</w:tr>
					</w:tbl>
				</xsl:for-each>
				<w:sectPr w:rsidR="005E6332" w:rsidRPr="00757F1A" w:rsidSect="00757F1A">
					<w:pgSz w:w="9412" w:h="11907" w:code="11"/>
					<w:pgMar w:top="57" w:right="397" w:bottom="57" w:left="397" w:header="709" w:footer="709" w:gutter="0"/>
					<w:cols w:space="708"/>
					<w:docGrid w:linePitch="360"/>
				</w:sectPr>
			</w:body>
		</w:document>
	</xsl:template>
</xsl:stylesheet>